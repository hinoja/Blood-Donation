<div>
    <div class="row clearfix jsdemo-notification-button">
        <div class="col-sm-12">
            {{-- <button type="button" class="btn btn-raised bg-pink waves-effect" data-placement-from="top"
                data-placement-align="left" data-animate-enter="animated fadeIn" data-animate-exit="animated fadeOut"
                data-color-name="bg-black"> FADE IN/OUT </button> --}}
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('First Name')</th>
                    <th>@lang('Subject')</th>
                    <th>@lang('Receipt_at')</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>
                            <span class="badge badge-info">{{ $message->created_at->diffForHumans() }}</span>
                        </td>
                        <td>
                            <button type="button"
                                class="@if ($message->response) btn btn-primary @else btn btn-danger @endif"
                                wire:click="showModalForm({{ $message }})" class="btn bg-grey waves-effect"> <i
                                    class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <ul class="header-dropdown" style="float: right;">
            {{ $messages->links() }}
        </ul>
    </div>



    {{--   For Material Design Colors --}}
    <div style="background:rgba(0, 0, 0, 0.3)" wire:ignore.self class="modal fade" id="MessageModal" tabindex="-1"
        role="dialog" aria-labelledby="EditCategoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="MessageModalLabel">@lang('Message Details')</h5>
                    <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label">@lang('Name')</label>
                            <div style="float:right;">{{ $displayContact?->name }}</div>
                            <br>
                            <hr>
                            <div><label for="control-label" style="font-weight:bold;float:left;">Email</label>
                                <a style="float:right;" href="">{{ $displayContact?->email }}</a>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label">@lang('Subject')</label>
                            <div style="float:right;">{{ $displayContact?->subject }}</div>
                        </div>
                        <br>
                        <hr>
                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label">@lang('Message')</label>
                            <br>
                            <div style="text-align:justify;">{{ $displayContact?->message }}</div>
                        </div>
                        <form wire:submit.prevent="replyMessage({{ $displayContact }})" id="InputRepyForm"
                            style="display:none;">
                            <hr style="background-color:blue;">
                            <div class="form-group">
                                <label class="control-label"> @lang('Response') </label>
                                <textarea style="background: rgb(213, 213, 235);" cols="20" rows="5" type="text" wire:model.defer="reply"
                                    class="form-control" placeholder=" {{ __('Reply to the message here') }}..."></textarea>
                                @error('reply')
                                    <span class="text-danger ">{{ $message }} </span>
                                @enderror
                                <br>
                                <div>
                                    <button wire:loading.remove type="submit" style="float: right;"
                                        class="btn btn-success">
                                        <i class="fa fa-paper-plane"></i>
                                        @lang('Send')
                                    </button>
                                    <button wire:loading wire:target="replyMessage" style="float: right;"
                                        class="btn btn-success" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        ...
                                    </button>
                                </div>
                            </div>
                        </form>

                        @if ($displayContact?->response)
                            <div class="form-group">
                                <label style="font-weight:bold;float:left;"
                                    class="control-label">@lang('Response')</label>
                                <br>
                                <div style="text-align:justify; color:rgb(6, 179, 6);">{{ $displayContact->response }}
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" wire:click="closeModal()"
                            data-dismiss="modal">@lang('Cancel') </button>
                        <div>


                            @if (!$displayContact?->response)
                                <button style="display: block;" type="button" id="buttonReply"
                                    wire:click="{{ $showForm ? 'closeReply()' : 'showReplyInput()' }}"
                                    class="btn btn-primary">
                                    <i class="fa fa-reply"></i>
                                    @if ($showForm)
                                        @lang('Do not reply')
                                    @else
                                        @lang('Reply')
                                    @endif
                                </button>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{--  --}}


</div>
