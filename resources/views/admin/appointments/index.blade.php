@extends('layouts.admin')
@section('signleTitle', __('appintement list'))
@section('title', 'All Messages')
@section('sub-title', 'Description text here...')
@push('css')
    {{-- <link rel="stylesheet" href="{{ asset('assets/back/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/back/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/back/plugins/fullcalendar/fullcalendar.min.css') }}">
    {{-- @livewireStyles() --}}
@endpush


@push('js')
    {{-- @livewireScripts() --}}
    {{-- <script src="{{ asset('assets/back/js/pages/ui/modals.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/back/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/back/js/pages/ui/notifications.js') }}"></script> --}}
    {{-- <script src=""></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="{{ asset('assets/back/js/pages/calendar/calendar.js') }}"></script>
    <script src="{{ asset('assets/back/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/back/bundles/fullcalendarscripts.bundle.js') }}"></script>
    {{-- <script type="text/javascript">
        // close message  modal
        window.livewire.on('closeModal', () => {
            $('#MessageModal').modal('hide');
            $('#InputRepyForm').modal('hide');
        });
        window.livewire.on('openModal', () => {
            //show modal details
            $('#MessageModal').modal('show');
        });
        window.livewire.on('closeFormReply', () => {
            // Close Input Reply and replyButton
            document.getElementById('InputRepyForm').style.display = 'none';
        });
        window.livewire.on('showFormReply', () => {
            // Show input reply
            document.getElementById('InputRepyForm').style.display = 'block';
            // document.getElementById('buttonReply').style.display = 'none';
        });
    </script> --}}



@endpush

@section('content')

    <x-livewire-alert::scripts />
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">

                    </div>
                    <div class="body">
                        {{-- @livewire('admin.manage-appointment') --}}
                        <div class="col-md-12 col-lg-8 col-xl-9">
                            <div class="card m-t-20">
                                <div class="body">
                                    <button class="btn btn-raised btn-success btn-sm m-r-0 m-t-0"
                                        id="change-view-today">today</button>
                                    <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0"
                                        id="change-view-day">Day</button>
                                    <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0"
                                        id="change-view-week">Week</button>
                                    <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0"
                                        id="change-view-month">Month</button>
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
