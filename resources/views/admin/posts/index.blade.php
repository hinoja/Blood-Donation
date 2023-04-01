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
