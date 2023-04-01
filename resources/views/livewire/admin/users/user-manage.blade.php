<div>
    <div class="table-responsive">
        <table class="table table-striped table table-bordered table-striped table-hover js-basic-example dataTable">
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
                                @if ($user->is_active)
                                    <button wire:click="UpdateStatusUser({{ $user }})" class="btn btn-danger"><i
                                            class="fa fa-lock"></i> </button>
                                @else
                                    <button wire:click="UpdateStatusUser({{ $user }})" class="btn btn-info"><i
                                            class="fa fa-lock-open"></i> </button>
                                @endif
                            @endif

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <ul class="header-dropdown" style="float: right;">
            {{ $users->links() }}
        </ul>
    </div>
</div>
