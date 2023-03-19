@extends('layouts.admin')
@section('signleTitle', __('Users list'))
@section('title', 'All Users')
@section('sub-title', 'Description text here...')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/back/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/back/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    @livewireStyles()
@endpush
@push('js')
    @livewireScripts()
    <script src="{{ asset('assets/back/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/back/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/back/js/page/modules-datatables.js') }}"></script>
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
                        @livewire('admin.users.user-manage')
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
