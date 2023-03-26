@extends('adminlte::page')

@section('title', 'Schedule')

@section('content_header')

@stop

<!--Content main-->
@section('content')

    <div class="card text-center mt-3">
        <div class="card-header">
            Schedules Calendar
        </div>
        <div class="card-body">

            @include('schedule.calendar')



        </div>

    </div>


@stop




@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@stop
