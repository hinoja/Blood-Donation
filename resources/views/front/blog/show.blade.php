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
                                        <img src="{{ asset('assets/front/images/news/blog-default-poster.png') }}"
                                            alt="Blog">
                                    </div>
                                    <div class="blog-post-date">
                                        <p><i class="fa-solid fa-clock"></i>{{ $post->FormatDate($post->published_at) }}</p>
                                    </div>
                                    <br>
                                    <h2>{{ $post->title }}</h2>

                                    <p  style="text-align:justify;">{!! $post->content !!} </p>

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
                                            {{-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore
                                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                            </p> --}}
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
                                    {{-- <div class="slide__group__btn">
                                        <div class="blog-prev-large">
                                            <a href="javascript:void(0)"><i class="fa-solid fa-arrow-left-long"></i>Previous
                                                Post</a>
                                            <p class="neutral-bottom">Lorem ipsum dolor sit amet, adipiscing elit, sed
                                                do
                                                eiusmod tempor incididunt
                                                utdolore magna suspendisse ultrices gravida.</p>
                                        </div>
                                        <div class="blog-next-large text-end">
                                            <a href="javascript:void(0)">Next Post<i
                                                    class="fa-solid fa-arrow-right-long"></i></a>
                                            <p class="text-end neutral-bottom">Lorem ipsum dolor sit amet, adipiscing
                                                elit, sed
                                                do eiusmod
                                                tempor incididunt utdolore magna suspendisse ultrices gravida.</p>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="comment-box">
                                        <h4>3 Comments</h4>
                                        <div class="comment-box__single">
                                            <div class="avatar">
                                                <img src="assets/images/avatars/comment-author.png" alt="Author">
                                            </div>
                                            <div class="comment-author-info">
                                                <div class="author-info__name">
                                                    <p class="tertiary">Robart Sony</p>
                                                    <p class="time">Says Jul 21, 2021 at 10:00am</p>
                                                </div>
                                                <p>On the other hand, we denounce with righteous indignation and dislike
                                                    men are
                                                    so beguiled and demoralized by the charms of pleasure of the moment,
                                                </p>
                                                <a href="javascript:void(0)" class="open-reply">Reply</a>
                                                <form action="#" method="post" class="reply-form">
                                                    <div class="input">
                                                        <textarea name="reply__one" id="replyOne" cols="30" rows="10" placeholder="Reply"></textarea>
                                                    </div>
                                                    <button type="submit"
                                                        class="button button--effect button--tertiary">Reply</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="comment-box__single comment-box__single-reply wow fadeInUp">
                                            <div class="avatar">
                                                <img src="assets/images/avatars/comment-author-two.png" alt="Author">
                                            </div>
                                            <div class="comment-author-info">
                                                <div class="author-info__name">
                                                    <p class="tertiary">Robart Sony</p>
                                                    <p class="time">Says Jul 21, 2021 at 10:00am</p>
                                                </div>
                                                <p>On the other hand, we denounce with righteous indignation and dislike
                                                    men are
                                                    so beguiled and demoralized by the charms of pleasure of the moment,
                                                </p>
                                                <a href="javascript:void(0)" class="open-reply">Reply</a>
                                                <form action="#" method="post" class="reply-form">
                                                    <div class="input">
                                                        <textarea name="reply__two" id="replyTwo" cols="30" rows="10" placeholder="Reply"></textarea>
                                                    </div>
                                                    <button type="submit"
                                                        class="button button--effect button--tertiary">Reply</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="comment-box__single mb-0">
                                            <div class="avatar">
                                                <img src="assets/images/avatars/comment-author.png" alt="Author">
                                            </div>
                                            <div class="comment-author-info">
                                                <div class="author-info__name">
                                                    <p class="tertiary">Robart Sony</p>
                                                    <p class="time">Says Jul 21, 2021 at 10:00am</p>
                                                </div>
                                                <p>On the other hand, we denounce with righteous indignation and dislike
                                                    men are
                                                    so beguiled and demoralized by the charms of pleasure of the moment,
                                                </p>
                                                <a href="javascript:void(0)" class="open-reply">Reply</a>
                                                <form action="#" method="post" class="reply-form">
                                                    <div class="input">
                                                        <textarea name="reply__three" id="replyThree" cols="30" rows="10" placeholder="Reply"></textarea>
                                                    </div>
                                                    <button type="submit"
                                                        class="button button--effect button--tertiary">Reply</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="reply-box wow fadeInUp">
                                        <h4>Leave A Reply</h4>
                                        <div class="comment__form" id="commentForm">
                                            <form action="#" method="post">
                                                <div class="input-group-column">
                                                    <div class="input">
                                                        <input type="text" name="comment_name" id="commentName"
                                                            placeholder="Name" required class="input">
                                                    </div>
                                                    <div class="input">
                                                        <input type="email" name="comment_mail" id="commentMail"
                                                            placeholder="Email" required class="input">
                                                    </div>
                                                </div>
                                                <div class="input">
                                                    <input type="text" name="web_address" id="webAddress"
                                                        placeholder="Website" required class="input">
                                                </div>
                                                <div class="input">
                                                    <textarea name="comment_text" id="commentText" cols="30" rows="10" class="input textarea"
                                                        placeholder="Write Your Comments"></textarea>
                                                </div>
                                                <button type="submit" class="button button--effect">Post A Comment<i
                                                        class="fa-solid fa-arrow-right-long"></i></button>
                                            </form>
                                        </div>
                                    </div>   --}}
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
                                    {{-- <div class="categories sidebar-single sidebar-single-default">
                                        <h4>Categories</h4>
                                        <ul>
                                            <li>
                                                <a href="campaigns.html"><i class="fa-solid fa-arrow-right-long"></i>Blood
                                                    Equipment</a>
                                            </li>
                                            <li>
                                                <a href="campaigns.html"><i
                                                        class="fa-solid fa-arrow-right-long"></i>Dependent
                                                    Things</a>
                                            </li>
                                            <li>
                                                <a href="campaigns.html"><i
                                                        class="fa-solid fa-arrow-right-long"></i>Donation
                                                    Care</a>
                                            </li>
                                            <li>
                                                <a href="campaigns.html"><i
                                                        class="fa-solid fa-arrow-right-long"></i>Donation
                                                    News</a>
                                            </li>
                                            <li>
                                                <a href="campaigns.html"><i class="fa-solid fa-arrow-right-long"></i>Help
                                                    People</a>
                                            </li>
                                        </ul>
                                    </div> --}}
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
                                            {{-- <li>
                                                <a href="gallery.html"><i
                                                        class="fa-solid fa-arrow-right-long"></i>Portfolio</a>
                                            </li> --}}
                                            <li>
                                                <a href="{{ route('front.blog.index') }}><i class="fa-solid
                                                    fa-arrow-right-long"></i>Our
                                                    Blog</a>
                                            </li>
                                            <li>
                                                <a href="about-us.html"><i
                                                        class="fa-solid fa-arrow-right-long"></i>@lang('About')</a>
                                            </li>
                                            <li>
                                                <a href="team.html"><i class="fa-solid fa-arrow-right-long"></i>Our
                                                    @lang('Team')</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('front.contact') }}"><i
                                                        class="fa-solid fa-arrow-right-long"></i>@lang('Contact us')</a>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- <div class="sidebar-single sidebar-single-default sidebar-single-default-alt">
                                        <h4>Follow Us</h4>
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
                                    </div> --}}
                                    <div class="sidebar-single sidebar-single-default sidebar-single--secondary excellence">
                                        <h4>@lang('Blood Excellence') </h4>
                                        <p>@lang('Expanded Blood Donate Services Here')</p>
                                        {{-- <p>There are many variations of passages Lorem Ipsum available, but the majority
                                            suffered of alteration in some form,</p> --}}
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
