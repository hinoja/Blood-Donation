<div>
    <div>
        <div class="mr-4">
            <a href="{{ route('admin.post.add') }}" class="btn btn-primary btn-md float-right mr-3"> <i
                    class="fa fa-plus"></i> <span class="text-sm"> @lang('Add Post')</span></a>
        </div>
        <div class="body table-responsive">
            <table
                class="table table-bordered table-striped  table-hover
             {{-- js-basic-example dataTable --}}
             ">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>@lang('image')</th>
                        <th>@lang('title')</th>
                        <th>@lang('By')</th>
                        <th>@lang('published_at')</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="col-2"> <img width="100%" src="@if($post->image) {{ asset('storage/posts/'.$post->image) }} @else {{ asset('storage/posts/noImage.png') }} @endif" class="col-7"
                                    alt=""></td>
                            <td>{{ $post->title }}</td>
                            <td> {{ $post->user->name }} </td>
                            <td>
                                @if ($post->published_at)
                                    <span class="badge badge-pill badge-sm badge-success  waves-effect">
                                        {{ $post->FormatDate($post->published_at) }}</span>
                                @else
                                    <span class="badge badge-pill badge-sm badge-dark   waves-effect">
                                        @lang('No')</span>
                                @endif
                            </td>
                            <td>
                                {{-- @if ($post->role_id > 1)
                                @if ($post->is_active) --}}
                                <button  wire:click="showDeleteForm({{ $post }})"
                                    class="btn btn-danger  waves-effect"><i class="fa fa-trash "></i> </button>
                                <a href="{{ route('admin.post.edit',$post) }}" {{-- wire:click="UpdateStatusUser({{ $post }})" --}} class="btn btn-info"><i class="fa fa-edit"></i> </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <ul class="header-dropdown" style="float: right;">
                {{ $posts->links() }}
            </ul>
        </div>
    </div>


    {{-- Modal:   Delete --}}
    <div style="background:rgba(0, 0, 0, 0.3)" wire:ignore.self class="modal fade" id="DeleteModal" tabindex="-1"
        role="dialog" aria-labelledby="EditCategoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteModalLabel">@lang('Delete Post'):  {{ $nameDelete  }}</h5>
                    <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <div class="modal-body">
                        <p class="text-danger font-weight-bold">@lang('Are you sure you want to delete this post?')
                            <br>
                            {{-- @lang('This will also remove all subcategories and jobs linked to that category.') --}}
                        </p>
                        </span>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success" wire:click="closeModal()"
                            data-dismiss="modal">@lang('Cancel')</button>
                        <button type="button" wire:click="destroyPost()" class="btn btn-danger">
                            @lang('Yes! delete')</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{--  --}}




</div>
