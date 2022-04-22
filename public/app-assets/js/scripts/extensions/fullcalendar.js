/*=========================================================================================
    File Name: fullcalendar.js
    Description: Fullcalendar
    --------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

document.addEventListener('DOMContentLoaded', function () {

    // color object for different event types
    var colors = {
        primary: "#7367f0",
        success: "#28c76f",
        danger: "#ea5455",
        warning: "#ff9f43"
    };

    // chip text object for different event types
    var categoryText = {
        primary: "Others",
        success: "Business",
        danger: "Personal",
        warning: "Work"
    };
    var categoryBullets = $(".cal-category-bullets").html(),
        evtColor = "",
        eventColor = "";

    // calendar init
    var calendarEl = document.getElementById('fc-default');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ["dayGrid", "timeGrid", "interaction"],
        customButtons: {
            addNew: {
                text: ' Add',
                // click: function () {
                //     var calDate = new Date,
                //         todaysDate = calDate.toISOString().slice(0, 10);
                //     $(".modal-calendar").modal("show");
                //     $(".modal-calendar .cal-submit-event").addClass("d-none");
                //     $(".modal-calendar .remove-event").addClass("d-none");
                //     $(".modal-calendar .cal-add-event").removeClass("d-none")
                //     $(".modal-calendar .cancel-event").removeClass("d-none")
                //     $(".modal-calendar .add-category .chip").remove();
                //     $("#cal-start-date").val(todaysDate);
                //     $("#cal-end-date").val(todaysDate);
                //     $(".modal-calendar #cal-start-date").attr("disabled", false);
                // }
            }
        },
        header: {
            left: "",
            center: "",
            right: "prev,title,next"
        },
        displayEventTime: false,
        navLinks: true,
        editable: true,
        allDay: true,
        events: event_data,
        navLinkDayClick: function (date) {
            var dates = moment(date).format('YYYY-MM-DD');
            var url = '{{ route("booking_add",":locale") }}';
            url = url.replace(':locale',0);
            window.location.href = 'booking_add/0/'+dates;
            // $(".modal-calendar").modal("show");
        },
        // dateClick: function (info) {
        //     console.log(1);
        //     $(".modal-calendar #cal-start-date").val(info.dateStr).attr("disabled", true);
        //     $(".modal-calendar #cal-end-date").val(info.dateStr);
        // },
        // displays saved event values on click
        eventClick: function (info) {
            console.log(info.event);
            $(".modal-calendar").modal("show");
            var title = info.event.title.split('--')[0];
            $(".modal-calendar #cal-event-title").html(title);
            $(".modal-calendar #cal-event-room-name").html(info.event.extendedProps.room_name);
            $(".modal-calendar #cal-event-room-building").html(info.event.extendedProps.building);
            $(".modal-calendar #cal-event-room-no").html(info.event.extendedProps.room_number);
            $(".modal-calendar #cal-event-room-seats").html(info.event.extendedProps.seats);
            $(".modal-calendar #cal-event-attendees").html(info.event.extendedProps.attendees);
            $(".modal-calendar #cal-event-user-name").html(info.event.extendedProps.user_name);
            $(".modal-calendar #cal-event-user-phone").html(info.event.extendedProps.user_phone);
            $(".modal-calendar #cal-event-use-for").html(info.event.extendedProps.use_for);
            $(".modal-calendar #cal-event-use_for-request-department").html(info.event.extendedProps.department);
            $(".modal-calendar #cal-event-cal-event-other").html(info.event.extendedProps.reason);
            $(".modal-calendar #cal-event-user-date").html(moment(info.event.start).format('YYYY-MM-DD  hh:mm:ss A')+'~'+moment(info.event.end).format('YYYY-MM-DD  hh:mm:ss A'));
            $(".modal-calendar #cal-description").val(info.event.extendedProps.description);
            $(".modal-calendar .remove-event").removeClass("d-none");
            $(".calendar-dropdown .dropdown-menu").find(".selected").removeClass("selected");
            var eventCategory = info.event.extendedProps.dataEventColor;

        },
    });

    // render calendar
    calendar.render();

    // appends bullets to left class of header
    // $("#basic-examples .fc-right").append(categoryBullets);

    // Close modal on submit button
    // $(".modal-calendar .cal-submit-event").on("click", function () {
    //     $(".modal-calendar").modal("hide");
    // });

    // Remove Event
    // $(".remove-event").on("click", function () {
    //     var removeEvent = calendar.getEventById('newEvent');
    //     removeEvent.remove();
    // });


    // reset input element's value for new event
    // if ($("td:not(.fc-event-container)").length > 0) {
    //     $(".modal-calendar").on('hidden.bs.modal', function (e) {
    //         $('.modal-calendar .form-control').val('');
    //     })
    // }

    // remove disabled attr from button after entering info
    // $(".modal-calendar .form-control").on("keyup", function () {
    //     if ($(".modal-calendar #cal-event-title").val().length >= 1) {
    //         $(".modal-calendar .modal-footer .btn").removeAttr("disabled");
    //     } else {
    //         $(".modal-calendar .modal-footer .btn").attr("disabled", true);
    //     }
    // });

    // open add event modal on click of day
    // $(document).on("click", ".fc-day", function () {
    //     $(".modal-calendar").modal("show");
    //     $(".calendar-dropdown .dropdown-menu").find(".selected").removeClass("selected");
    //     $(".modal-calendar .cal-submit-event").addClass("d-none");
    //     $(".modal-calendar .remove-event").addClass("d-none");
    //     $(".modal-calendar .cal-add-event").removeClass("d-none");
    //     $(".modal-calendar .cancel-event").removeClass("d-none");
    //     $(".modal-calendar .add-category .chip").remove();
    //     $(".modal-calendar .modal-footer .btn").attr("disabled", true);
    //     evtColor = colors.primary;
    //     eventColor = "primary";
    // });

    // change chip's and event's color according to event type
    // $(".calendar-dropdown .dropdown-menu .dropdown-item").on("click", function () {
    //     var selectedColor = $(this).data("color");
    //     evtColor = colors[selectedColor];
    //     eventTag = categoryText[selectedColor];
    //     eventColor = selectedColor;
    //
    //     // changes event color after selecting category
    //     $(".cal-add-event").on("click", function () {
    //         calendar.addEvent({
    //             color: evtColor,
    //             dataEventColor: eventColor,
    //             className: eventColor
    //         });
    //     })
    //
    //     $(".calendar-dropdown .dropdown-menu").find(".selected").removeClass("selected");
    //     $(this).addClass("selected");
    //
    //     // add chip according to category
    //     $(".modal-calendar .chip-wrapper .chip").remove();
    //     $(".modal-calendar .chip-wrapper").append($("<div class='chip chip-" + selectedColor + "'>" +
    //         "<div class='chip-body'>" +
    //         "<span class='chip-text'> " + eventTag + " </span>" +
    //         "</div>" +
    //         "</div>"));
    // });

    // calendar add event
    // $(".cal-add-event").on("click", function () {
    //     $(".modal-calendar").modal("hide");
    //     var eventTitle = $("#cal-event-title").val(),
    //         startDate = $("#cal-start-date").val(),
    //         endDate = $("#cal-end-date").val(),
    //         eventDescription = $("#cal-description").val(),
    //         correctEndDate = new Date(endDate);
    //     calendar.addEvent({
    //         id: "newEvent",
    //         title: eventTitle,
    //         start: startDate,
    //         end: correctEndDate,
    //         description: eventDescription,
    //         color: evtColor,
    //         dataEventColor: eventColor,
    //         allDay: true
    //     });
    // });

    // date picker
    $(".pickadate").pickadate({
        format: 'yyyy-mm-dd'
    });
});
