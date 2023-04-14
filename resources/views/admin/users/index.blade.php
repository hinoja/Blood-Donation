@extends('layouts.admin')
@section('signleTitle', __('Users list'))
@section('title', 'All Users')
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
                        {{-- @livewire('admin.users.user-manage') --}}
                        <div class="table-responsive">
                            <table
                                class="table table-striped table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>@lang('First Name')</th>
                                        <th>@lang('Email')</th>
                                        <th>@lang('Active')</th>
                                        <th>@lang('Role')</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->is_active)
                                                    <span class="badge badge-pill badge-sm badge-success  waves-effect">
                                                        @lang('Yes')</span>
                                                @else
                                                    <span class="badge badge-pill badge-sm badge-dark   waves-effect">
                                                        @lang('No')</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $user->role->name }}
                                            </td>
                                            <td>
                                                @if ($user->role_id > 1)
                                                <form method="POST"
                                                        action="{{ route('admin.users.status', $user->id) }}">
                                                        @csrf
                                                        @method('PATCH')
                                                        <a href="{{ route('admin.users.status', $user->id) }}"
                                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();"
                                                            class="btn btn-{{ $user->is_active ? 'danger' : 'primary' }}">
                                                            @if ($user->is_active)
                                                                {{-- @lang('Block') --}}<i class="fa fa-lock"></i>
                                                            @else
                                                                {{-- @lang('Unblock') --}}<i class="fa fa-lock-open"></i>
                                                            @endif

                                                        </a>
                                                    </form>
                                                    @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
