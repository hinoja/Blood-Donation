<div>
    <div class="container-fluid">
        <form wire:submit.prevent="storePost()" enctype="multipart/form-data">
            @csrf
            <div class="row clearfix">
                <div class="col-md-12 p-l-0 p-r-0">
                    <section class="boxs-simple">
                        <div class="profile-header">
                            <div class="profile_info">
                                @if ($image)
                                    <div class="profile-image ">
                                        <img src="{{ $image->temporaryUrl() }}" class="col-3" height="120px"
                                            width="60px" alt="">
                                    </div>
                                    {{-- @else
                                    <div class="profile-image"> <img
                                            src="{{ asset('assets/back/images/random-avatar7.jpg') }}" alt="">
                                    </div> --}}
                                @endif
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
                                            <input type="file" name="image" wire:model="image" class="form-control"
                                                placeholder="upload a image...">
                                        </div>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group col-10">
                                        <div class="form-line">
                                            <input type="radio" name="published" wire:model="published" class="form-control"
                                                >
                                        </div>

                                    </div> --}}
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
                                <div class=" row">
                                    <div class="col-10 ">
                                        <div class=" form-group drop-custum">
                                            <select wire:ignore.self class="form-select form-control show-tick"
                                                wire:model="tags_name" name="tags_name"
                                                data-placeholder="Choose Categories" multiple class="chosen-select">
                                                @foreach ($tags as $tag)
                                                    <option class=" " value="{{ $tag->id }}">
                                                        {{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input type="text" class="form-control" name="name"
                                                wire:model.defer="name" placeholder="new tag..."> --}}
                                        </div>
                                        @error('tags')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- <button class="btn btn-info col-2 btn-sm mb-4"> <i class="fa fa-plus"></i></button> --}}

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
                            <div class=" ">
                                <div class="tab-pane in active">
                                    <div class="body">
                                        <div wire:ignore class="col-12">
                                            <textarea id="description" wire:model="content" {{-- id="summernote" class="card-body summernote" --}} class="form-control col-12" cols="40"
                                                rows="50">{{ $content }}</textarea>
                                        </div>
                                        @error('content')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mr-4" style="float: right;">
                        <button type="submit" class="btn btn-success btn-lg mr-3"> <i class="fa fa-save">
                                @lang('Save')</i> </button>
                        <button type="reset" class="btn btn-danger btn-lg"> <i class="fa fa-trash">
                                @lang('Reset')</i> </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
@push('js')
    @livewireScripts()
    {{-- summernote --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    {{-- <script src="{{ asset('assets/front/vendor/jquery/jquery-3.6.0.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script src="{{ asset('assets/back/summernote/summernote-bs4.js') }}"></script>
    <script>
        $('#description').summernote({
            height: 500,
            focus: true,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('content', contents);
                }
            }

        });
    </script>



    {{-- summernote --}}
    {{-- <script src="{{ asset('assets/front/vendor/jquery/jquery-3.6.0.min.js') }}"></script> --}}
@endpush
