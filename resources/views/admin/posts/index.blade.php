@extends('layouts.admin')
@section('signleTitle', __('Posts list'))
@section('title', 'All Posts')
@section('sub-title', 'Description text here...')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/back/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    @livewireStyles()
@endpush
@push('js')
    @livewireScripts()
    <script src="{{ asset('assets/back/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset('assets/back/bundles/datatablescripts.bundle.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/back/js/page/modules-datatables.js') }}"></script>

    <script src="{{ asset('assets/back/js/pages/ui/modals.js') }}"></script>
    <script src="{{ asset('assets/back/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('assets/back/js/pages/ui/notifications.js') }}"></script>

    <script type="text/javascript">
        // close message  modal
        window.livewire.on('closeModal', () => {
            $('#DeleteModal').modal('hide');
            $('#PublishModal').modal('hide');
            // $('#DeleteModal').modal('hide');
        });
        window.livewire.on('openDeleteModal', () => {
            //show modal details
            $('#DeleteModal').modal('show');
        });
        window.livewire.on('openPublishModal', () => {
            //show modal details
            $('#PublishModal').modal('show');
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
                    @livewire('admin.posts.posts-manage')
                </div>
            </div>
        </div>
    </div>
@endsection
