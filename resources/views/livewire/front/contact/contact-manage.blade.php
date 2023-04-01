<div>
    <form wire:submit.prevent="store()">
        @csrf
        <div class="input-group-column">
            <div class="input">
                <input type="text" wire:model.defender="name" name="name" id="contactFName"
                    placeholder={{ __('First Name') }} class="input">

                @error('name')
                   <span class="text-danger text-center text"> <small>{{ $message }}</small></span>
                @enderror
            </div>
            <br>

            <div class="input">
                <input type="email" wire:model.defender="email" name="email" id="contactMail"
                    placeholder="{{ __('Email') }}" class="input">

                @error('email')
                    <span class="text-danger text-center text"><small>{{ $message }}</small></span>
                @enderror
            </div>

        </div>

        <div class="input-group-column">

            <div class="input">
                <input type="text" wire:model.defender="subject" name="subject" id="contactSubject"
                    placeholder="{{ __('Subject') }}" class="input">

                @error('subject')
                    <span class="text-danger text-center text"><small>{{ $message }}</small></span>
                @enderror
            </div>
        </div>
        <br>
        <div class="input">
            <textarea wire:model.defender="message" name="message" id="contactMessage" cols="30" rows="10"
                class="input textarea" placeholder="{{ __('Message') }}"></textarea>

            @error('message')
                <span class="text-danger text-center text"><small>{{ $message }}</small></span>
            @enderror
        </div>
        <br>
        {{-- <button wire:loading.remove type="submit" style="float: right;"
        class="btn btn-success">
        <i class="fa fa-paper-plane"></i>
        @lang('Send')
    </button>
    <button wire:loading wire:target="replyMessage" style="float: right;"
        class="btn btn-success" disabled>
        <span class="spinner-border spinner-border-sm" role="status"
            aria-hidden="true"></span>
        ...
    </button> --}}

        {{-- <div class="col-12"> --}}
        <button type="submit" class="button button--effect">Submit
            Request<i class="fa-solid fa-arrow-right-long"></i></button>

        {{-- <button wire:click.prevent="store()" wire:loading.remove class="button button--effect" type="submit">
                @lang('Submit  Request')<i class="fa-solid fa-arrow-right-long"></i> </button> --}}

        {{-- <button wire:target="store()" wire:loading class="button button--effect" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            @lang('Loading')...
        </button> --}}

        {{-- <button type="submit" class="button button--effect">Submit
            Request<i class="fa-solid fa-arrow-right-long"></i></button> --}}
    </form>
</div>
