$(document).ready(function () {

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  
  
    const calendar = $(".calendar"),
      date = $(".date"),
      daysContainer = $(".days"),
      prev = $(".prev"),
      next = $(".next"),
      todayBtn = $(".today-btn"),
      gotoBtn = $(".goto-btn"),
      dateInput = $(".date-input"),
      eventDay = $(".event-day"),
      eventsContainer = $(".events"),
      addEventBtn = $(".add-event"),
      addEventWrapper = $(".add-event-wrapper "),
      addEventCloseBtn = $(".close "),
      addEventTitle = $(".event-name "),
      addEventFrom = $(".event-time-from "),
      addEventTo = $(".event-time-to "),
      addEventSubmit = $(".add-event-btn ");
  
    let today = new Date();
    let activeDay;
    let month = today.getMonth();
    let year = today.getFullYear();
  
    const months = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];
  
  // const eventsArr = [
  //   {
  //     day: 25,
  //     month: 11,
  //     year: 2023,
  //     events: [
  //       {
  //         title: "Event 1 lorem ipsun dolar sit genfa tersd dsad ",
  //         time: "10:00 AM",
  //       },
  //       {
  //         title: "Event 2",
  //         time: "11:00 AM",
  //       },
  //     ],
  //   },
  // ];
  
  
  
    let eventsArr = [];
  
    getEvents();
  
    function initCalendar() {
      const firstDay = new Date(year, month, 1);
      const lastDay = new Date(year, month + 1, 0);
      const prevLastDay = new Date(year, month, 0);
      const prevDays = prevLastDay.getDate();
      const lastDate = lastDay.getDate();
      const day = firstDay.getDay();
      const nextDays = 7 - lastDay.getDay() - 1;
  
      date.html(months[month] + " " + year);
  
      let days = "";
  
      for (let x = day; x > 0; x--) {
        days += `<div class="day prev-date">${prevDays - x + 1}</div>`;
      }
  
      for (let i = 1; i <= lastDate; i++) {
        let event = false;
        eventsArr.forEach((eventObj) => {
          if (
            eventObj.day === i &&
            eventObj.month === month + 1 &&
            eventObj.year === year
          ) {
            event = true;
          }
        });
        if (
          i === new Date().getDate() &&
          year === new Date().getFullYear() &&
          month === new Date().getMonth()
        ) {
          activeDay = i;
          getActiveDay(i);
          updateEvents(i);
          if (event) {
            days += `<div class="day today active event">${i}</div>`;
          } else {
            days += `<div class="day today active">${i}</div>`;
          }
        } else {
          if (event) {
            days += `<div class="day event">${i}</div>`;
          } else {
            days += `<div class="day ">${i}</div>`;
          }
        }
      }
  
      for (let j = 1; j <= nextDays; j++) {
        days += `<div class="day next-date">${j}</div>`;
      }
      daysContainer.html(days);
      addListener();
    }
  
    function prevMonth() {
      month--;
      if (month < 0) {
        month = 11;
        year--;
      }
      initCalendar();
    }
  
    function nextMonth() {
      month++;
      if (month > 11) {
        month = 0;
        year++;
      }
      initCalendar();
    }
  
    prev.on("click", prevMonth);
    next.on("click", nextMonth);
  
    initCalendar();
  
    function addListener() {
      const days = $(".day");
      days.on("click", function (e) {
        getActiveDay($(this).text());
        updateEvents(Number($(this).text()));
        activeDay = Number($(this).text());
        days.removeClass("active");
        if ($(this).hasClass("prev-date")) {
          prevMonth();
          setTimeout(() => {
            const days = $(".day");
            days.each(function () {
              if (
                !$(this).hasClass("prev-date") &&
                $(this).text() === $(e.target).text()
              ) {
                $(this).addClass("active");
              }
            });
          }, 100);
        } else if ($(this).hasClass("next-date")) {
          nextMonth();
          setTimeout(() => {
            const days = $(".day");
            days.each(function () {
              if (
                !$(this).hasClass("next-date") &&
                $(this).text() === $(e.target).text()
              ) {
                $(this).addClass("active");
              }
            });
          }, 100);
        } else {
          $(this).addClass("active");
        }
      });
    }
  
    todayBtn.on("click", function () {
      today = new Date();
      month = today.getMonth();
      year = today.getFullYear();
      initCalendar();
    });
  
    function getActiveDay(date) {
      const day = new Date(year, month, date);
      const dayName = day.toLocaleString("default", { weekday: "long" });
      eventDay.html(
        "<span class='day-number'>" + date + " </span>" + dayName
      );
    }
  
    function updateEvents(date) {
      let events = "";
      eventsArr.forEach((event) => {
        if (
          date === event.day &&
          month + 1 === event.month &&
          year === event.year
        ) {
          event.events.forEach((event) => {
            events += `<div class="event">
                <div class="title">
                  <i class="fas fa-circle"></i>
                  <h3 class="event-title">${event.title}</h3>
                </div>
                <div class="event-time">
                  <span class="event-time">${event.time}</span>
                </div>
            </div>`;
          });
        }
      });
      if (events === "") {
        events = `<div class="no-event">
                <h3>No Events</h3>
            </div>`;
      }
      eventsContainer.html(events);
    }
  
    addEventBtn.on("click", function () {
      addEventWrapper.toggleClass("active");
    });
  
    addEventCloseBtn.on("click", function () {
      addEventWrapper.removeClass("active");
    });
  
    $(document).on("click", function (e) {
      if (
        e.target !== addEventBtn[0] &&
        !addEventWrapper.is(e.target) &&
        addEventWrapper.has(e.target).length === 0
      ) {
        addEventWrapper.removeClass("active");
      }
    });
  
    addEventTitle.on("input", function (e) {
      addEventTitle.val(addEventTitle.val().slice(0, 60));
    });
  
    addEventFrom.on("input", function (e) {
      addEventFrom.val(addEventFrom.val().replace(/[^0-9:]/g, ""));
      if (addEventFrom.val().length === 2) {
        addEventFrom.val(addEventFrom.val() + ":");
      }
      if (addEventFrom.val().length > 5) {
        addEventFrom.val(addEventFrom.val().slice(0, 5));
      }
    });
  
    addEventTo.on("input", function (e) {
      addEventTo.val(addEventTo.val().replace(/[^0-9:]/g, ""));
      if (addEventTo.val().length === 2) {
        addEventTo.val(addEventTo.val() + ":");
      }
      if (addEventTo.val().length > 5) {
        addEventTo.val(addEventTo.val().slice(0, 5));
      }
    });
  
    addEventSubmit.on("click", function () {
      const eventTitle = addEventTitle.val();
      const eventTimeFrom = addEventFrom.val();
      const eventTimeTo = addEventTo.val();
      if (eventTitle === "" || eventTimeFrom === "" || eventTimeTo === "") {
        alert("Please fill all the fields");
        return;
      }
  
      const timeFromArr = eventTimeFrom.split(":");
      const timeToArr = eventTimeTo.split(":");
      if (
        timeFromArr.length !== 2 ||
        timeToArr.length !== 2 ||
        timeFromArr[0] > 23 ||
        timeFromArr[1] > 59 ||
        timeToArr[0] > 23 ||
        timeToArr[1] > 59
      ) {
        alert("Invalid Time Format");
        return;
      }
  
      const timeFrom = convertTime(eventTimeFrom);
      const timeTo = convertTime(eventTimeTo);
  
      let eventExist = false;
      eventsArr.forEach((event) => {
        if (
          event.day === activeDay &&
          event.month === month + 1 &&
          event.year === year
        ) {
          event.events.forEach((event) => {
            if (event.title === eventTitle) {
              eventExist = true;
            }
          });
        }
      });
      if (eventExist) {
        alert("Event already added");
        return;
      }
      const newEvent = {
        title: eventTitle,
        time: timeFrom + " - " + timeTo,
      };
  
      let eventAdded = false;
      if (eventsArr.length > 0) {
        eventsArr.forEach((item) => {
          if (
            item.day === activeDay &&
            item.month === month + 1 &&
            item.year === year
          ) {
            item.events.push(newEvent);
            eventAdded = true;
          }
        });
      }
  
      if (!eventAdded) {
  
        const eventData = {
            day: activeDay,
            month: month + 1,
            year: year,
            events: [newEvent],
        }
  
  
        const eventDataPayload = {
          day: activeDay,
          month: month + 1,
          year: year,
          title: newEvent.title,
          time: newEvent.time,
        }
        
  
        $.ajax({
          type: 'POST',
          url: '/add-event',
          data: JSON.stringify(
            eventDataPayload
          ),
  
          contentType: 'application/json',
          success: function(response) {
          },
          error: function(error) {
              console.error(error);
          }
      });
  
  
        eventsArr.push(eventData);
      }
  
      addEventWrapper.removeClass("active");
      addEventTitle.val("");
      addEventFrom.val("");
      addEventTo.val("");
      updateEvents(activeDay);
  
      const activeDayEl = $(".day.active");
      if (!activeDayEl.hasClass("event")) {
        activeDayEl.addClass("event");
      }
    });
  
    eventsContainer.on("click", ".event", function (e) {
      if (confirm("Are you sure you want to delete this event?")) {
  
        const eventTitle = $(this).find(".event-title").text();
  
  
        const eventDataPayload = {
          day: activeDay,
          month: month + 1,
          year: year,
          title: eventTitle,
        }
  
        $.ajax({
          url: '/delete-event',
          type: 'post',
          data: JSON.stringify(
            eventDataPayload
          ),
          success: function (response) {
          },
          error: function (error) {
              console.error('Error fetching events:', error);
          }
      });
          
  
  
  
        eventsArr.forEach((event) => {
          if (
            event.day === activeDay &&
            event.month === month + 1 &&
            event.year === year
          ) {
            event.events.forEach((item, index) => {
              if (item.title === eventTitle) {
                event.events.splice(index, 1);
              }
            });
            if (event.events.length === 0) {
              eventsArr.splice(eventsArr.indexOf(event), 1);
              const activeDayEl = $(".day.active");
              if (activeDayEl.hasClass("event")) {
                activeDayEl.removeClass("event");
              }
            }
          }
  
  
  
        });
        updateEvents(activeDay);
      }
    });
  
  
  
    function getEvents() {
      $.ajax({
        url: '/get-schedule',
        type: 'GET',
        dataType: 'json',
        success: function (response) {
  
          if (response.events.length === 0) {
            return;
          }
  
            response.events.forEach((event) => {
              let eventItems = [];
  
              event.events.forEach((item) => {
                eventItems.push({
                  title: item.title,
                  time: item.time,
                });
              });
  
              eventsArr.push({
                day: event.day,
                month: event.month,
                year: event.year,
                events: eventItems,
              });
  
            });          
  
            initCalendar();
        },
        error: function (error) {
            console.error('Error fetching events:', error);
        }
    });
    }
  
    function convertTime(time) {
      let timeArr = time.split(":");
      let timeHour = timeArr[0];
      let timeMin = timeArr[1];
      let timeFormat = timeHour >= 12 ? "PM" : "AM";
      timeHour = timeHour % 12 || 12;
      time = timeHour + ":" + timeMin + " " + timeFormat;
      return time;
    }
  });
  