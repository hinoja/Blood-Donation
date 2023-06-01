@extends('layouts.admin')
@section('signleTitle', __('Edit Post'))
@section('title', 'Edit Post')
@section('sub-title', 'Description text here...')
@push('css')
    {{-- summernote --}}
    <link rel="stylesheet" href="{{ asset('assets/back/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    @livewireStyles()
@endpush
@push('js')
    @livewireScripts()
    {{-- summernote --}}
    <script src="{{ asset('assets/back/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset('assets/back/bundles/datatablescripts.bundle.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/back/js/page/modules-datatables.js') }}"></script>

    <script src="{{ asset('assets/back/js/pages/ui/modals.js') }}"></script>
    <script src="{{ asset('assets/back/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('assets/back/js/pages/ui/notifications.js') }}"></script>


    <script type="text/javascript">
        // close message  modal
        window.livewire.on('closeModal', () => {
            $('#DeleteModal').modal('hide');
        });
        window.livewire.on('openDeleteModal', () => {
            //show modal details
            $('#DeleteModal').modal('show');
        });
    </script>
@endpush

@section('content')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
    <section class="  profile-page">
        @livewire('admin.posts.edit', ['tags' => $tags, 'content' => $content, 'title' => $title, 'image' => $image])
    </section>
@endsection
