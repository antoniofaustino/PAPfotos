<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FullCalendar 4.3 with Laravel And NPM</title>
    {{-- <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet' /> --}}

    {{-- <link href='{{url(mix('assets/fullcalendarNPM/css/fullcalendar.css'))}}' rel='stylesheet'/> --}}
    <link href='{{url(mix('public/assets/fullcalendarNPM/css/bootstrap.css'))}}' rel='stylesheet'/>
    <link href='{{url(mix('public/assets/fullcalendarNPM/css/style.css'))}}' rel='stylesheet'/> --}}
    {{-- <link href='{{asset('assets/fullcalendarNPM/css/fullcalendar.css')}}' rel='stylesheet'/>
    {{-- <link href='{{asset('assets/fullcalendarNPM/css/bootstrap.css')}}' rel='stylesheet'/>
    <link href='{{asset('assets/fullcalendarNPM/css/style.css')}}' rel='stylesheet'/> --}}
   

</head>
<body>

<div id='wrap'>@yield('content')</div>

<div style='clear:both'></div>
<script src='{{asset('assets/fullcalendar/packages/core/locales-all.js.')}}'></script> --}}
{{-- <script src='{{asset('assets/fullcalendarNPM/js/fullcalendar.js')}}'></script>
<script src='{{asset('assets/fullcalendarNPM/js/jquery-and-mask-and-moment.js')}}'></script>
<script src='{{asset('assets/fullcalendarNPM/js/bootstrap.js')}}'></script>
<script src='{{asset('assets/fullcalendarNPM/js/scriptCalendar.js')}}'></script> --}}
{{-- <script src='{{asset('assets/fullcalendar/js/calendar.js')}}'></script>

{{-- <script>
import { Calendar } from '@fullcalendar/core';
import bootstrapPlugin from '@fullcalendar/bootstrap';
...
var calendar = new Calendar(calendarEl, {
  plugins: [ bootstrapPlugin S],
  themeSystem: 'bootstrap'
});
...
</script> --}}


</body>
</html>