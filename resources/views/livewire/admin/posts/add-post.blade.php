<div>
    <div class="container-fluid">
        <form wire:submit.prevent="storePost()"  enctype="multipart/form-data">
            @csrf
            <div class="row clearfix">
                <div class="col-md-12 p-l-0 p-r-0">
                    <section class="boxs-simple">
                        <div class="profile-header">
                            <div class="profile_info">
                                <div class="profile-image"> <img
                                        src="{{ asset('assets/back/images/random-avatar7.jpg') }}" alt="">
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
                                        <input type="text" name="title" wire:model.defer="title"
                                            class="form-control" placeholder="title of post ...">
                                    </div>
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
                                            <input type="file" name="image" wire:model="image"
                                                class="form-control" placeholder="upload a image...">
                                        </div>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                {{-- foreach --}}
                                <div class="container row">
                                    <div class="form-group col-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name"
                                                wire:model.defer="name" placeholder="new tag...">
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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


                                <div role="tabpanel" class="tab-pane in active" id="usersettings">
                                    <div class="body">
                                        <div class="col-12">
                                            <textarea name="content" name="content" wire:model.defer="content" {{-- id="summernote" class="card-body summernote" --}} class="form-control col-12"
                                                id="" cols="30" rows="20"></textarea>
                                            @error('content')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mr-4" style="float: right;">
                        <button type="submit" class="btn btn-success btn-lg mr-3"> <i class="fa fa-save">
                                @lang('Save')</i> </button>
                        <button type="reset" class="btn btn-danger btn-lg"> <i class="fa fa-save">
                                @lang('Reset')</i> </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
