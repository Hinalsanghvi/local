<!DOCTYPE html>
<!-- saved from url=(0069)https://fullcalendar.io/js/fullcalendar-3.4.0/demos/agenda-views.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="https://fullcalendar.io/js/fullcalendar-3.4.0/fullcalendar.min.css" rel="stylesheet">
<link href="https://fullcalendar.io/js/fullcalendar-3.4.0/fullcalendar.print.min.css" rel="stylesheet" media="print">
<script src="https://fullcalendar.io/js/fullcalendar-3.4.0/lib/moment.min.js"></script>
<script src="https://fullcalendar.io/js/fullcalendar-3.4.0/lib/jquery.min.js"></script>
<script src="https://fullcalendar.io/js/fullcalendar-3.4.0/fullcalendar.min.js"></script>
<style>
/*#calendar { display: none; }*/
</style>
</head>
  <body>
      <div id="abc">view Calendar</div>
      <div id="calendar"></div>
  </body>
  <script>

  $(document).ready(function() {
    $('#abc').click(function(){
       
   $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2017-05-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2017-05-01'
        },
        {
          title: 'Long Event',
          start: '2017-05-07',
          end: '2017-05-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2017-05-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2017-05-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2017-05-11',
          end: '2017-05-13'
        },
        {
          title: 'Meeting',
          start: '2017-05-12T10:30:00',
          end: '2017-05-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2017-05-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2017-05-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2017-05-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2017-05-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2017-05-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2017-05-28'
        }
      ]
    });
    
  });
 });
</script>
</html>
