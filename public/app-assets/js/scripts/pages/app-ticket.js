/*=========================================================================================
    File Name: app-user.js
    Description: User page
    --------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function () {

    var isRtl;
    if ($('html').attr('data-textdirection') == 'rtl') {
        isRtl = true;
    } else {
        isRtl = false;
    }

    //  Rendering badge in status column
    var customBadgeHTML = function (params) {
        var color = "";
        // console.log(params.value);
        if (params.value == "open") {
            color = "success";
            return "<a href='ticket-view/"+params.data.id+"'><div class='badge badge-pill badge-" + color + "' >" + params.value + "</div></a>"
        } else if (params.value == "new") {
            color = "danger";
            return "<a href='ticket-view/"+params.data.id+"'><div class='badge badge-pill badge-" + color + "' >" + params.value + "</div></a>"
        } else if (params.value == "on_hold") {
            color = "warning";
            return "<a href='ticket-view/"+params.data.id+"'><div class='badge badge-pill badge-" + color + "' >" + params.value + "</div></a>"
        }else if (params.value == "closed") {
            color = "warning";
            return "<a href='ticket-view/"+params.data.id+"'><div class='badge badge-pill badge-" + color + "' >" + params.value + "</div></a>"
        }
    };

    var customDate = function (params) {
        let val = moment(params.value, 'YYYY-MM-DD HH:mm:ss').format('YYYY-MM-DD'); //dddd,DD MMMM
        return val;
    };

    //  Rendering bullet in verified column
    var customBulletHTML = function (params) {
        var color = "";
        if (params.value == true) {
            color = "success";
            return "<div class='bullet bullet-sm bullet-" + color + "' >" + "</div>"
        } else if (params.value == false) {
            color = "secondary";
            return "<div class='bullet bullet-sm bullet-" + color + "' >" + "</div>"
        }
    };

    var columnDefs = [
        {
            headerName: 'TicketID',
            field: 'id',
            width: 190,
            filter: true,
            checkboxSelection: true,
            headerCheckboxSelectionFilteredOnly: true,
            headerCheckboxSelection: true,
            cellStyle: {
                "border-left": "none",
                "border-right": "none",
                "border-top": "none"
            }
        },
        {
            headerName: 'Status',
            field: 'status',
            cellRenderer: customBadgeHTML,
            filter: true,
            width: 250,
            cellStyle: {
                "border-left": "none",
                "border-right": "none",
                "border-top": "none"
            }
        },
        {
            headerName: 'Date',
            field: 'created',
            filter: true,
            width: 200,
            cellStyle: {
                "border-left": "none",
                "border-right": "none",
                "border-top": "none"
            }
        },
        {
            headerName: 'Subject',
            field: 'subject',
            filter: true,
            width: 350,
            cellStyle: {
                "border-left": "none",
                "border-right": "none;",
                "border-top": "none;"
            }
        },
        {
            headerName: 'Queue',
            field: 'queue',
            filter: true,
            width: 200,
            cellStyle: {
                "border-left": "none",
                "border-right": "none",
                "border-top": "none",
            }
        },


    ];

    /*** GRID OPTIONS ***/
    var gridOptions = {
        defaultColDef: {
            sortable: true
        },
        enableRtl: isRtl,
        columnDefs: columnDefs,
        rowSelection: "multiple",
        floatingFilter: true,
        filter: true,
        pagination: true,
        paginationPageSize: 20,
        pivotPanelShow: "always",
        colResizeDefault: "shift",
        animateRows: true,
        resizable: true
    };
    if (document.getElementById("myGrid")) {
        /*** DEFINED TABLE VARIABLE ***/
        var gridTable = document.getElementById("myGrid");

        /*** GET TABLE DATA FROM URL ***/
        agGrid
            .simpleHttpRequest({
                url: "data/users-list.json"
            })
            .then(function (data) {
                // console.log(owner_list);
                gridOptions.api.setRowData(owner_list);
            });

        // var gridOptions = {
        //     columnDefs: columnDefs,
        //     rowData: owner_list,
        //     onGridReady: function () {
        //         gridOptions.api.sizeColumnsToFit();
        //     }
        // };
        //
        // //
        // // function selectAllRows() {
        // //     gridOptions.api.selectAll();
        // // }
        // //
        // document.addEventListener("DOMContentLoaded", function () {
        //     // lookup the container we want the Grid to use
        //
        //     var eGridDiv = document.querySelector('#myGrid');
        //
        //     // // create the grid passing in the div to use together with the columns & data we want to use
        //     new agGrid.Grid(eGridDiv, gridOptions);
        // });

        /*** FILTER TABLE ***/
        function updateSearchQuery(val) {
            gridOptions.api.setQuickFilter(val);
        }

        $(".ag-grid-filter").on("keyup", function () {
            updateSearchQuery($(this).val());
        });

        /*** CHANGE DATA PER PAGE ***/
        function changePageSize(value) {
            gridOptions.api.paginationSetPageSize(Number(value));
        }

        $(".sort-dropdown .dropdown-item").on("click", function () {
            var $this = $(this);
            changePageSize($this.text());
            $(".filter-btn").text("1 - " + $this.text() + " of 50");
        });

        /*** EXPORT AS CSV BTN ***/
        $(".ag-grid-export-btn").on("click", function (params) {
            gridOptions.api.exportDataAsCsv();
        });

        //  filter data function
        var filterData = function agSetColumnFilter(column, val) {
            var filter = gridOptions.api.getFilterInstance(column);
            var modelObj = null;
            if (val !== "all") {
                modelObj = {
                    type: "contains",
                    filter: val
                }
            }
            filter.setModel(modelObj);
            gridOptions.api.onFilterChanged()
        };
        //  filter inside role
        $("#status").on("change", function () {
            var status = $("#status").val();
            filterData("status", status)
        });
        //  filter inside verified
        $("#queue").on("change", function () {
            var queue = $("#queue").val();
            filterData("queue", queue)
        });
        //  filter inside status
        $("#ticket_date").on("change", function () {
            // let ticket_date = moment($("#ticket_date").val(), 'YYYY-MM-DD HH:mm:ss').format('YYYY-MM-DD');
            let ticket_date = $("#ticket_date").val();
            filterData("created", ticket_date)
        });

        // filter reset
        $(".users-data-filter").click(function () {
            $('#owner-list-status').prop('selectedIndex', 0);
            $('#owner-list-status').change();
        });

        /*** INIT TABLE ***/
        new agGrid.Grid(gridTable, gridOptions);
    }
    // users language select
    if ($("#users-language-select2").length > 0) {
        $("#users-language-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }
    // users music select
    if ($("#users-music-select2").length > 0) {
        $("#users-music-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }
    // users calcs select
    if ($("#users-calcs-select2").length > 0) {
        $("#users-calcs-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }
    // users birthdate date
    if ($(".birthdate-picker").length > 0) {
        $('.birthdate-picker').pickadate({
            format: 'mmmm, d, yyyy'
        });
    }
    // Input, Select, Textarea validations except submit button validation initialization
    if ($(".users-edit").length > 0) {
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }
});
