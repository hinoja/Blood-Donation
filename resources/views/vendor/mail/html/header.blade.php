@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">

            {{-- @if (trim($slot) === 'BloodDonation')
                <img src="{{ asset('assets/front/images/bg2.jpg') }}" class="logo" alt="{{ config('app.name') }} Logo">
            @else
                {{ $slot }}
            @endif --}}

            @if (trim($slot) === 'Blood Donation')
                <img src="{{ asset('assets/front/images/bg2.jpg') }}" class="logo" alt="{{ config('app.name') }} Logo">
                {{-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo"> --}}
            @else
                <img src="{{ asset('assets/front/images/bg2.jpg') }}" class="logo" alt="{{ config('app.name') }} Logo">
            @endif
        </a>
    </td>
</tr>
