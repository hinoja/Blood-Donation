@extends('layouts.front')
@section('title', __('Details Blog'))
@push('css')
    @livewireStyles()
@endpush
@push('js')
    @livewireScripts()
@endpush
@section('content')

    <!-- ==== blog details section start ==== -->
    <section class="blog-default section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-default-area">
                        <div class="row neutral-row">
                            <div class="col-lg-8 row-item">
                                <div class="blog-default-area__content blog-details blog-default-area__content-alt-two">
                                    <div class="details-poster">
                                        <img style="max-width: 719px;max-height:400px;" {{-- src="@if ($post->image){{ asset('storage/posts/' . $post->image) }} @else {{ asset('storage/posts/noImage.png') }} @endif" --}}
                                            src=" {{ $post->image }}" alt="Blog">
                                    </div>
                                    <div class="blog-post-date">
                                        <p><i class="fa-solid fa-clock"></i>{{ $post->FormatDate($post->published_at) }}</p>
                                    </div>
                                    <br>
                                    <h2>{{ $post->title }}</h2>

                                    <p style="text-align:justify;">{!! $post->content !!} </p>

                                    <div class="img-group">
                                        <img src="{{ asset('assets/front/images/campaigns/campaign-details-slider-one.png') }}"
                                            alt="Donate">
                                        <img src="{{ asset('assets/front/images/campaigns/campaign-details-slider-two.png') }}"
                                            alt="Donate">
                                    </div>
                                    <div class="post__tags">
                                        <p class="tertiary"> Tags</p>
                                        <div class="tags">
                                            @foreach ($post->tags as $tag)
                                                <a href="#" class="tag-btn">{{ $tag->name }}</a>
                                            @endforeach

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="author__info">
                                        <div class="avatar wow fadeInUp">
                                            <img src="{{ asset('assets/front/images/avatars/author.png') }}"
                                                alt="Post Author">
                                        </div>
                                        <div class="author__content">
                                            <h6>{{ $post->user->name }}</h6>

                                            <div class="social social--secondary">
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 row-item">
                                <div class="blog-default-area__sidebar">
                                    <div class="sidebar-single sidebar-single-default">
                                        <form action="#" method="post" name="searchPost">
                                            <div class="input-group-btn input-group-btn--secondary">
                                                <input type="search" name="search__post" id="searchPost"
                                                    placeholder="@lang('Search')" required>
                                                <button type="submit" class="button button--effect"><i
                                                        class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="sidebar-single sidebar-single-default sidebar-single-default-profile wow fadeInUp">
                                        <div class="img-box">
                                            <img src="{{ asset('assets/front/images/avatars/markusa.png') }}"
                                                alt="Markusa">
                                        </div>
                                        <h4 class="text-center">Nicolas Markusa</h4>
                                        <p class="text-center">Lorem ipsum dolor sit amet, adipiscing elit, sed do
                                            eiusmod
                                            temptor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="social social--tertiary">
                                            <a href="javascript:void(0)">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="sidebar-single sidebar-single-default wow fadeInUp">
                                        <h4>@lang('Recent Posts')</h4>
                                        @foreach ($recentsPost as $recent)
                                            <div class="recent-post-single">
                                                <div class="latest-news__single-content">
                                                    <p>
                                                        <a
                                                            href="{{ route('front.blog.show', $recent) }}">{{ $recent->title }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="categories sidebar-single sidebar-single-default">
                                        <h4>@lang('Quick Link')</h4>
                                        <ul>

                                            <li>
                                                <a href="{{ route('front.blog.index') }}><i class="fa-solid
                                                    fa-arrow-right-long"></i>Our
                                                    Blog</a>
                                            </li>
                                            <li>
                                                <a href="#"><i
                                                        class="fa-solid fa-arrow-right-long"></i>@lang('About')</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i>Our
                                                    @lang('Team')</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('front.contact') }}"><i
                                                        class="fa-solid fa-arrow-right-long"></i>@lang('Contact us')</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="sidebar-single sidebar-single-default sidebar-single--secondary excellence">
                                        <h4>@lang('Blood Excellence') </h4>
                                        <p>@lang('Expanded Blood Donate Services Here')</p>

                                        <a href="{{ route('front.contact') }}"
                                            class="button button--quinary button--effect">@lang('Contact us')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== #blog details section end ==== -->
@endsection