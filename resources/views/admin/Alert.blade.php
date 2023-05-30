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
                        <style>
                            body {
                                /* background: #f3c538; */
                            }

                            .forget-pwd>a {
                                color: #dc3545;
                                font-weight: 500;
                            }

                            .forget-password .panel-default {
                                padding: 31%;
                                margin-top: -27%;
                            }

                            .forget-password .panel-body {
                                padding: 15%;
                                margin-bottom: -50%;
                                background: #fff;
                                border-radius: 5px;
                                -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            }

                            img {
                                width: 40%;
                                margin-bottom: 10%;
                            }

                            .btnForget {
                                background: #c0392b;
                                border: none;
                            }

                            .forget-password .dropdown {
                                width: 100%;
                                border: 1px solid #ced4da;
                                border-radius: .25rem;
                            }

                            .forget-password .dropdown button {
                                width: 100%;
                            }

                            .forget-password .dropdown ul {
                                width: 100%;
                            }
                        </style>
                        {{-- @livewire('admin.users.user-manage') --}}
                        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
                            id="bootstrap-css">
                        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                        <!------ Include the above in your HEAD tag ---------->

                        <div class="container forget-password">
                            {{-- <div class="row"> --}}
                            <div class="col-md-12 col-md-offset-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="text-center">
                                            <img src="{{ asset('assets/back/images/pushnotification.jpg') }}" alt="car-key"
                                                border="0">
                                            <h2 class="text-center">@lang('Send Alert to donor ')</h2>
                                            {{-- <p>You can reset your password here.</p> --}}
                                            <form id="register-form" role="form" autocomplete="off" class="form"
                                                method="post" action="{{ route('notification') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        {{-- <select class="form-control" id="sel1">
                                                                <option selected="true" disabled="disabled">Please Select
                                                                    Security Question</option>
                                                                <option>Which is your favorite movie?</option>
                                                                <option>What is your pet's name?</option>
                                                                <option>What is the name of your village?</option>
                                                            </select> --}}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-envelope color-blue"></i></span>
                                                        <input  name="title" placeholder="title"
                                                            class="form-control" type="text">
                                                    </div>
                                                    @error('title')
                                                        <small> <span class="text-danger">{{ $message }}</span></small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="glyphicon glyphicon-envelope color-blue"></i></span>
                                                        <input  name="message" placeholder="message"
                                                            class="form-control" type="text">
                                                    </div>
                                                    @error('message')
                                                        <small><span class="text-danger">{{ $message }}</span></small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input name="btnForget"
                                                        class="btn btn-lg btn-danger btn-block btnForget"
                                                        value="Submit Alert" type="submit">
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
