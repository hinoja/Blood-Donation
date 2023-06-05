<div>

    <section class="blog section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-area">
                        <div class="section-header section-inner-space">
                            <p class="primary neutral-ascender descender">Our News</p>
                            <h2 class="neutral-bottom">Checkout News & Updates</h2>
                        </div>
                        <div class="row neutral-row justify-content-center">
                            @foreach ($posts as $post)
                                <div class="col-sm-10 col-md-6 col-lg-4 row-item align-center">
                                    <div class="blog-area__single img-effect">
                                        <div class="poster">
                                            <a href="{{ route('front.blog.show', $post) }}">
                                                <img style="max-width: 412px;max-height:270px;"
                                                    src="{{ $post->image }}" {{-- src="@if ($post->image) {{ asset('storage/posts/' . $post->image) }} @else {{ asset('storage/posts/noImage.png') }} @endif" --}} alt="Helpless">
                                            </a>

                                            <a href="{{ route('front.blog.show', $post) }}" class="expand"><i
                                                    class="fa-solid fa-plus"></i></a>
                                        </div>
                                        <div class="blog-area__single-content">
                                            <div class="blog-post-date">
                                                <p><i
                                                        class="fa-solid fa-clock"></i>{{ $post->FormatDate($post->published_at) }}
                                                </p>
                                                <p><a href="{{ route('front.blog.show', $post) }}">
                                                        {{-- <span class="fa fa-primary">New</span> --}}
                                                        {{-- <i class="fa-solid fa-comments"></i>3 Comments</a> --}}
                                                </p>
                                            </div>
                                            <h6><a href="{{ route('front.blog.show', $post) }}">{{ $post->title }}</a>
                                            </h6>
                                            <p class="neutral-bottom" style="text-align:justify;">
                                                {{ Str::limit($post->content, 200, '...') }}</p>
                                            <a href="{{ route('front.blog.show', $post) }}" class="read-more">
                                                @lang('Read More')
                                                <i class="fa-solid fa-angles-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
