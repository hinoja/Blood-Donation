@extends('layouts.admin')
@section('signleTitle', __('Messages list'))
@section('title', 'All Messages')
@section('sub-title', 'Description text here...')

@section('content')

    <h3 class="page-title">{{ trans('global.systemCalendar') }}</h3>
    <div class="card">
        <div class="card-header">
            {{ trans('global.systemCalendar') }}
        </div>

        <div class="card-body">
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
            {{-- @livewire('admin.manage-appointment') --}}

            <div id='calendar-container' wire:ignore>
                <style>
                    #calendar {
                        margin: 10px auto;
                        padding: 10px;
                        max-width: 1100px;
                    }
                </style>
                <div id='calendar'></div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
@endpush
@push('js')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />

    <script>
        // $(document).ready(function() {
        //     // page is now ready, initialize the calendar...
        //     events = {!! json_encode($events) !!};
        //     $('#calendar').fullCalendar({
        //         // put your options and callbacks here
        //         headerToolbar: {
        //             left: 'prev,next today',
        //             center: 'title',
        //             right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        //         },
        //         locale: '{{ config('app.locale') }}',
        //         events: events,
        //     })
        // });
        document.addEventListener('DOMContentLoaded', function() {


            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                eventTimeFormat: { // like '14:30:00'
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false
                },
                initialView: 'timeGridWeek',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                // eventBackgroundColor:'#378006',
                eventColor: '#378006',
                allDay: true,
                events: @json($events),
            });

            calendar.render();
        });
    </script>
@endpush
