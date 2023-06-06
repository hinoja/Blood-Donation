@extends('layouts.admin')
@section('signleTitle', __('Appointments list'))
@section('title', 'All Appointments')
@section('sub-title', 'Description text here...')

@section('content')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />

    <h3 class="page-title">
        {{-- {{ trans('global.systemCalendar') }} --}}
    </h3>
    <div class="card">
        <div class="card-header">
            {{-- {{ trans('global.systemCalendar') }} --}}
        </div>

        <div class="card-body">
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
            {{-- Update view --}}

            <div class="body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#profile">@lang('TABLE')</a>
                    </li>
                    <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#home">@lang('CALENDAR')</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in active" id="profile">
                        @livewire('admin.manage-appointment')
                    </div>
                    {{-- calendar --}}
                    {{-- <div role="tabpanel" id="home" wire:ignore>
                        <div class="container"  >
                            <div id="calendar-container" >
                                <style>
                                    #calendar {
                                        margin: 0px auto;
                                        padding: 0px;
                                        height: 800px;
                                        max-width: 1500px;
                                    }
                                </style>
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            {{-- end Update view --}}

        </div>
    </div>
@endsection

@push('css')
    @livewireScripts()
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
@endpush
@push('js')
    @livewireScripts()
    <script type="text/javascript">
        // close message  modal
        window.livewire.on('closeModal', () => {
            $('#validateAppointment').modal('hide');
        });
        window.livewire.on('openValidateModal', () => {
            //show modal details
            $('#validateAppointment').modal('show');
        });
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />

    <script>
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
