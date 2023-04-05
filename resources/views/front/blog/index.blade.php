@extends('layouts.front')
@section('title', __('Contact us'))
@push('css')
    @livewireStyles()
@endpush
@push('js')
    @livewireScripts()
    {{-- <script src="{{ asset('js/jquery-2.2.2.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script> --}}
@endpush
@section('content')
   <!-- ==== blog section start ==== -->
   <section class="blog bg-white section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @livewire('front.posts.list-post')
            </div>
        </div>
    </div>
</section>
<!-- ==== #blog section end ==== -->

@endsection
