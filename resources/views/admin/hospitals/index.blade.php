@extends('layouts.admin')
@section('signleTitle', __('Hospitals list'))
@section('title', 'All Hospitals')
@section('sub-title', 'Description text here...')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/back/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/back/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    @livewireStyles()
@endpush


@push('js')
    @livewireScripts()
    <script src="{{ asset('assets/back/js/pages/ui/modals.js') }}"></script>
    <script src="{{ asset('assets/back/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('assets/back/js/pages/ui/notifications.js') }}"></script>


    <script type="text/javascript">
        // close message  modal
        window.livewire.on('closeModal', () => {
            $('#HospitalModal').modal('hide');
        });
        window.livewire.on('closeModalConfirmation', () => {
            $('#ConfirmationModal').modal('hide');
        });
        window.livewire.on('openModal', () => {
            //show modal details
            $('#HospitalModal').modal('show');
        });
        window.livewire.on('showConfimation', () => {
            //show modal details
            $('#ConfirmationModal').modal('show');
        });
    </script>
@endpush

@section('content')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">

                    </div>
                    <div class="body">
                        @livewire('admin.hospitals.manage-hospital')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
