<div>
    <div class="body table-responsive">
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
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
                        <td> <img src="{{ asset('assets/front/images/logo.png') }}" alt=""></td>
                        <td>{{ $post->title }}</td>
                        <td> {{ $post->user->name }} </td>
                        <td>
                            @if ($post->published_at)
                                <span class="badge badge-pill badge-sm badge-success  waves-effect">
                                    @lang('Yes')</span>
                            @else
                                <span class="badge badge-pill badge-sm badge-dark   waves-effect">
                                    @lang('No')</span>
                            @endif
                        </td>
                        <td>
                            {{-- @if ($post->role_id > 1)
                            @if ($post->is_active) --}}
                            <button {{-- wire:click="UpdateStatusUser({{ $post }})" --}} class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                            <button {{-- wire:click="UpdateStatusUser({{ $post }})" --}} class="btn btn-info"><i class="fa fa-edit"></i> </button>
                            {{-- @else --}}
                            <button {{-- wire:click="UpdateStatusUser({{ $post }})" --}} class="btn btn-primary"><i class="fa fa-eye"></i> </button>
                            {{-- @endif
                        @endif --}}

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
