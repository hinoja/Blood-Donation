@extends('layouts.admin')
@section('signleTitle', __('Add Post'))
@section('title', 'Add Post')
@section('sub-title', 'Description text here...')
@push('css')
    {{-- summernote --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/back/summernote/css/vendors.css') }}" />
     {{-- sumernote --}}
    <link rel="stylesheet" href="{{ asset('assets/back/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    @livewireStyles()
@endpush
@push('js')
    @livewireScripts()
    {{-- summernote --}}
    {{-- <script src="{{ asset('assets/back/summernote/js/vendors.js') }}"></script> --}}
    <script src="{{ asset('assets/back/summernote/js/app.js') }}"></script>
    {{-- summernote --}}
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
    <section class="  profile-page">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12 p-l-0 p-r-0">
                    <section class="boxs-simple">
                        <div class="profile-header">
                            <div class="profile_info">
                                <div class="profile-image"> <img src="assets/images/random-avatar7.jpg" alt="">
                                </div>
                                <h4 class="mb-0"><strong>Preview Picture</strong> </h4>
                                {{-- <span class="text-muted col-white">Dentist</span> --}}
                                <div class="mt-10">
                                    <br> <br>
                                    {{-- <button class="btn btn-raised btn-default bg-blush btn-sm">Follow</button>
                                    <button class="btn btn-raised btn-default bg-green btn-sm">Message</button> --}}
                                </div>

                            </div>
                        </div>
                        <div class="profile-sub-header">
                            <div class="box-list">
                                {{-- <ul class="text-center">
                                    <li> <a href="mail-inbox.html" class=""><i class="zmdi zmdi-email"></i>
                                        <p>My Inbox</p>
                                        </a> </li>
                                    <li> <a href="javascript:void(0);" class=""><i class="zmdi zmdi-camera"></i>
                                        <p>Gallery</p>
                                        </a> </li>
                                    <li> <a href="javascript:void(0);"><i class="zmdi zmdi-attachment"></i>
                                        <p>Collections</p>
                                        </a> </li>
                                    <li> <a href="javascript:void(0);"><i class="zmdi zmdi-format-subject"></i>
                                        <p>Tasks</p>
                                        </a> </li>
                                </ul> --}}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Title</h2>
                        </div>
                        <div class="body">
                            <p class="text-default">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="title of post ...">
                                    </div>
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>picture</h2>
                        </div>
                        <div class="body">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="container row">
                                    <div class="form-group col-10">
                                        <div class="form-line">
                                            <input type="file" class="form-control" placeholder="new tag ...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Tags</h2>
                        </div>
                        <div class="body">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="container row">
                                    <div class="form-group col-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="new tag ...">
                                        </div>
                                    </div>
                                    <button class="btn btn-info col-2 btn-sm mb-4"> <i class="fa fa-plus"></i></button>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">

                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="#usersettings">@lang('Content')</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                {{-- <div role="tabpanel" class="tab-pane in active" id="mypost">
                                    <div class="wrap-reset">
                                        <div class="mypost-form">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                                </div>
                                            </div>
                                            <div class="post-toolbar-b"> <a href="javascript:void(0);" tooltip="Add File"
                                                    class="btn btn-raised btn-default btn-sm"><i
                                                        class="zmdi zmdi-attachment"></i></a> <a href="javascript:void(0);"
                                                    tooltip="Add Image" class="btn btn-raised btn-default btn-sm"><i
                                                        class="zmdi zmdi-camera"></i></a> <a href="javascript:void(0);"
                                                    class="pull-right btn btn-raised btn-success btn-sm"
                                                    tooltip="Post it!">Post</a> </div>
                                        </div>
                                        <div class="mypost-list">
                                            <div class="post-box">
                                                <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 3
                                                    minutes ago</span>
                                                <div class="post-img"><img src="http://via.placeholder.com/1000x400"
                                                        class="img-fluid" alt /></div>
                                                <div>
                                                    <h5>Lorem Ipsum is simply dummy text of the printing</h5>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                                        dummy text ever since the 1500s, </p>
                                                    <p> <a href="javascript:void(0);"
                                                            class="btn btn-raised btn-info btn-sm"><i
                                                                class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-raised bg-soundcloud btn-sm"><i
                                                                class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="post-box">
                                                <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 23
                                                    minutes ago</span>
                                                <div class="post-img"><img src="http://via.placeholder.com/1000x400"
                                                        class="img-fluid" alt /></div>
                                                <div>
                                                    <h5>Lorem Ipsum is simply dummy text of the printing</h5>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                                        dummy text ever since the 1500s, </p>
                                                    <p> <a href="javascript:void(0);"
                                                            class="btn btn-raised btn-info btn-sm"><i
                                                                class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-raised bg-soundcloud btn-sm"><i
                                                                class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="post-box">
                                                <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 45
                                                    minutes ago</span>
                                                <div class="post-img"><img src="http://via.placeholder.com/1000x400"
                                                        class="img-fluid" alt /></div>
                                                <div>
                                                    <h5>Lorem Ipsum is simply dummy text of the printing</h5>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's standard
                                                        dummy text ever since the 1500s, </p>
                                                    <p> <a href="javascript:void(0);"
                                                            class="btn btn-raised btn-info btn-sm"><i
                                                                class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-raised bg-soundcloud btn-sm"><i
                                                                class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="text-center"> <a href="javascript:void(0);"
                                                    class="btn btn-raised btn-default">Load More …</a> </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div role="tabpanel" class="tab-pane in active" id="usersettings">
                                    <div class="body">
                                        <form action="">
                                            <div class="col-12">

                                                <textarea name="content"
                                                   {{-- id="summernote" class="card-body summernote" --}}
                                                     class="form-control col-12" id="" cols="30" rows="20"></textarea>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
