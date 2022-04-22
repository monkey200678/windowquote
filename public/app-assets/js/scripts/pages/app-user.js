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
        if (params.value == "Invoice No Paid") {
            color = "success";
            return "<div class='con-vs-chip ag-grid-cell-chip vs-chip-warning con-color-" + color + "' >" + params.value + "</div>"
        } else if (params.value == "Pending") {
            color = "danger";
            return "<div class='badge badge-pill badge-" + color + "' >" + params.value + "</div>"
        } else if (params.value == "Trial") {
            color = "warning";
            return "<div class='badge badge-pill badge-" + color + "' >" + params.value + "</div>"
        }
    };
    //calculate the datetype
    var customDate = function (params) {
        console.log(params.value);
        let val = moment(params.value, 'YYYY-MM-DD HH:mm:ss').format('DD/MM/YYYY'); //dddd,DD MMMM
        console.log(val);
        return val;
    };

    //  Rendering bullet in verified column
    var customBulletHTML = function (params) {
        var color = "";
        if (params.value == true) {
            color = "primary";
            return "<div class='bullet bullet-sm bullet-" + color + "' >" + "</div>"
        } else if (params.value == false) {
            color = "white";
            return "<div class='bullet bullet-sm bullet-" + color + "' >" + "</div>"
        }
    };

    // Renering Icons in Actions column
    var customIconsHTML = function (params) {
        // console.log(params.data.id);
        var usersIcons = document.createElement("span");
        var editIconHTML = "<a href='owner-edit/"+params.data.id+"'>" +

            "<i class= 'users-edit-icon feather icon-edit-1 mr-50'></i>" +
            "</a>";
        var deleteIconHTML = document.createElement('i');
        var attr = document.createAttribute("class");
        attr.value = "users-delete-icon feather icon-trash-2";
        var attr1 = document.createAttribute("id");
        attr1.value="owner_delete";
        deleteIconHTML.setAttributeNode(attr);
        deleteIconHTML.setAttributeNode(attr1);
        // selected row delete functionality

        deleteIconHTML.addEventListener("click", function () {
            deleteArr = [
                params.data
            ];

            Swal.fire({
                title: 'are you sure?',
                text: "can't revert it",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-danger ml-1',
                buttonsStyling: false,
            }).then(function (result) {
                if (result.value) {
                    Swal.fire({
                        type: "success",
                        title: 'Deleted!',
                        text: 'Your file has been deleted.',
                        confirmButtonClass: 'btn btn-success',
                    });
                    $.ajax({
                        url:'owner-deletes/'+params.data.id,
                        type:'get',
                        success:function () {
                            // var selectedData = gridOptions.api.getSelectedRows();
                            gridOptions.api.updateRowData({
                                remove: deleteArr
                            });
                        }
                    })
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'Cancelled',
                        text: 'Your imaginary file is safe :)',
                        type: 'error',
                        confirmButtonClass: 'btn btn-success',
                    })
                }
            });

        });
        usersIcons.appendChild($.parseHTML(editIconHTML)[0]);
        usersIcons.appendChild(deleteIconHTML);
        return usersIcons
    };

    //  Rendering avatar in username column
    var customAvatarHTML = function (params) {
        return "<a href='owner-view/"+params.data.id+"'><span class='avatar'><img src='" + params.data.picture + "' height='32' width='32'></span>"+params.data.name+"</a>"
    };

    // ag-grid
    /*** COLUMN DEFINE ***/

    var columnDefs = [
        {
            headerName: 'ID',
            field: 'id',
            width: 150,
            filter: true,
            checkboxSelection: true,
            headerCheckboxSelectionFilteredOnly: true,
            headerCheckboxSelection: true,
            cellStyle: {
                "border-left": "none;",
                "border-right": "none;",
                "border-top": "none;"
            }
        },
        {
            headerName: 'Owner name',
            field: 'name',
            filter: true,
            width: 250,
            cellRenderer: customAvatarHTML,
            cellStyle: {
                "border-left": "none;",
                "border-right": "none;",
                "border-top": "none;"
            }
        },
        {
            headerName: 'Created Date',
            field: 'created_at',
            filter: true,
            width: 220,
            cellRenderer:customDate,
            cellStyle: {
                "border-left": "none;",
                "border-right": "none;",
                "border-top": "none;"
            }
        },
        {
            headerName: 'Country',
            field: 'country',
            filter: true,
            width: 230,
            cellStyle: {
                "border-left": "none;",
                "border-right": "none;",
                "border-top": "none;"
            }
        },
        {
            headerName: 'Payment Status',
            field: 'payment_status',
            filter: true,
            width: 200,
            cellRenderer: customBulletHTML,
            cellStyle: {
                "text-align": "center",
                "border-left": "none;",
                "border-right": "none;",
                "border-top": "none;"
            }
        },
        {
            headerName: 'Status',
            field: 'status',
            filter: true,
            cellRenderer: customBadgeHTML,
            width: 250,
            cellStyle: {
                "border-left": "none;",
                "border-right": "none;",
                "border-top": "none;"
            }
        },

        {
            headerName: 'Verified',
            field: 'verified',
            filter: true,
            width: 250,
            cellRenderer: customBulletHTML,
            cellStyle: {
                "text-align": "center",
                "border-left": "none;",
                "border-right": "none;",
                "border-top": "none;"
            }
        },
        {
            headerName: 'Actions',
            field: 'transactions',
            width: 200,
            cellRenderer: customIconsHTML,
            cellStyle: {
                "border-left": "none;",
                "border-right": "none;",
                "border-top": "none;"
            }
        }
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
                url: "../users-list.json"
            })
            .then(function (data) {
                console.log(owner_list);
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
                    type: "equals",
                    filter: val
                }
            }
            filter.setModel(modelObj);
            gridOptions.api.onFilterChanged()
        };
        //  filter inside role
        $("#owner-list-status").on("change", function () {
            var ownerListStatus = $("#owner-list-status").val();
            filterData("status", ownerListStatus)
        });
        //  filter inside verified
        $("#users-list-verified").on("change", function () {
            var usersListVerified = $("#users-list-verified").val();
            filterData("payment_status", usersListVerified)
        });
        //  filter inside status
        $("#users-list-country").on("change", function () {
            var usersListCountry = $("#users-list-country").val();
            filterData("country", usersListCountry)
        });

        //  filter inside status
        $("#verified").on("change", function () {
            var verified = $("#verified").val();
            filterData("verified", verified)
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
