<x-mail::message>
    {{-- <div>
        <img src="public_path('assets/back/images/bg2.jpg')" height="70px;" width="80px;" alt="test">
    </div> --}}
    {{-- <img src="{{ asset('assets/back/images/bg2.jpg') }}" alt="" height="70px;" width="80px;"> --}}
    {{-- Greeting --}}
    @if (!empty($greeting))
        # {{ $greeting }}
    @else
        @if ($level === 'error')
            # @lang('Whoops!')
        @else
            # @lang('Hello!')
        @endif
    @endif

    {{-- Intro Lines --}}
    @foreach ($introLines as $line)
        {{ $line }}
    @endforeach

    {{-- Action Button --}}
    @isset($actionText)
        <?php
        $color = match ($level) {
            'success', 'error' => $level,
            default => 'red',
        };
        ?>
        <x-mail::button :url="$actionUrl" :color="$color" style="background: red">
            {{ $actionText }}
        </x-mail::button>
    @endisset

    {{-- Outro Lines --}}
    @foreach ($outroLines as $line)
        {{ $line }}
    @endforeach

    {{-- Salutation --}}
    @if (!empty($salutation))
        {{ $salutation }}
    @else
        @lang('Regards'),<br>
        <span style="color: red;">{{ config('app.name') }}</span>
    @endif

    {{-- Subcopy --}}
    @isset($actionText)
        <x-slot:subcopy style="color: red;">
            @lang("If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n" . 'into your web browser:', [
                'actionText' => $actionText,
            ]) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
        </x-slot:subcopy>
    @endisset
</x-mail::message>
