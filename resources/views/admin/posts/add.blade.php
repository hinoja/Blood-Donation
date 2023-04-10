@extends('layouts.admin')
@section('signleTitle', __('Add Post'))
@section('title', 'Add Post')
@section('sub-title', 'Description text here...')
@push('css')
    {{-- summernote --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/back/summernote/summernote-bs4.css') }}">
    {{-- sumernote --}}
     @livewireStyles()
@endpush

@section('content')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
    <section class="  profile-page">
        @livewire('admin.posts.add-post')


    </section>
@endsection
