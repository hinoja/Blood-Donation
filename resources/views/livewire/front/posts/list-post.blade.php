@php
    use Illuminate\Support\Str;
@endphp
@push('css')
    <style>
        li.active span {
            color: red;
        }
    </style>
@endpush
<div>
    <div class="blog-area">
        <div class="row neutral-row justify-content-center">

            @foreach ($posts as $post)
                @if ($post)
                    <div class="col-md-6 col-lg-4 row-item align-center">
                        <div class="blog-area__single img-effect">
                            <div class="poster">
                                <a href="{{ route('front.blog.show', $post) }}">
                                    <img src="@if ($post->image) {{ asset('storage/posts/' . $post->image) }} @else {{ asset('storage/posts/noImage.png') }} @endif"
                                        alt="Helpless" width="352px" height="264px">
                                </a>

                                <a href="{{ route('front.blog.show', $post) }}" class="expand"><i
                                        class="fa-solid fa-plus"></i></a>
                            </div>
                            <div class="blog-area__single-content">
                                <div class="blog-post-date">
                                    <p><i class="fa-solid fa-clock"></i>{{ $post->FormatDate($post->published_at) }}</p>
                                    <p><a href="{{ route('front.blog.show', $post) }}">
                                            {{-- <span class="fa fa-primary">New</span> --}}
                                            {{-- <i class="fa-solid fa-comments"></i>3 Comments</a> --}}
                                    </p>
                                </div>
                                <h6><a href="{{ route('front.blog.show', $post) }}">{{ $post->title }}</a></h6>
                                <p class="neutral-bottom" style="text-align:justify;">
                                    {{ Str::limit($post->content, 200, '...') }}</p>
                                <a href="{{ route('front.blog.show', $post) }}" class="read-more">
                                    @lang('Read More')
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            {{-- <div class="col-md-6 col-lg-4 row-item align-center">
                <div class="blog-area__single img-effect wow fadeInUp">
                    <div class="poster">
                        <a href="blog-details.html">
                            <img src="assets/images/news/activity.png" alt="Activity">
                        </a>
                        <a href="blog-details.html" class="expand"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="blog-area__single-content">
                        <div class="blog-post-date">
                            <p><i class="fa-solid fa-clock"></i>18 Feb, 2022</p>
                            <p><a href="blog-details.html"><i class="fa-solid fa-comments"></i>3 Comments</a></p>
                        </div>
                        <h6><a href="blog-details.html">Don’t Do This Activity After You Donating Your Blood</a></h6>
                        <p class="neutral-bottom">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, magni eos qui ratione voluptatem</p>
                        <a href="blog-details.html" class="read-more">
                            Read More
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 row-item align-center">
                <div class="blog-area__single img-effect wow fadeInUp" data-wow-delay="0.2s">
                    <div class="poster">
                        <a href="blog-details.html">
                            <img src="assets/images/news/poor.png" alt="Poor">
                        </a>
                        <a href="blog-details.html" class="expand"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="blog-area__single-content">
                        <div class="blog-post-date">
                            <p><i class="fa-solid fa-clock"></i>18 Feb, 2022</p>
                            <p><a href="blog-details.html"><i class="fa-solid fa-comments"></i>3 Comments</a></p>
                        </div>
                        <h6><a href="blog-details.html">Donation is hope for the poor helpless children</a></h6>
                        <p class="neutral-bottom">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, magni eos qui ratione voluptatem</p>
                        <a href="blog-details.html" class="read-more">
                            Read More
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 row-item align-center">
                <div class="blog-area__single img-effect wow fadeInUp">
                    <div class="poster">
                        <a href="blog-details.html">
                            <img src="assets/images/news/helpless-two.png" alt="Helpless">
                        </a>
                        <a href="blog-details.html" class="expand"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="blog-area__single-content">
                        <div class="blog-post-date">
                            <p><i class="fa-solid fa-clock"></i>18 Feb, 2022</p>
                            <p><a href="blog-details.html"><i class="fa-solid fa-comments"></i>3 Comments</a></p>
                        </div>
                        <h6><a href="blog-details.html">Donation is hope for the poor helpless children</a></h6>
                        <p class="neutral-bottom">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, magni eos qui ratione voluptatem</p>
                        <a href="blog-details.html" class="read-more">
                            Read More
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 row-item align-center">
                <div class="blog-area__single img-effect wow fadeInUp" data-wow-delay="0.4s">
                    <div class="poster">
                        <a href="blog-details.html">
                            <img src="assets/images/news/activity.png" alt="Activity">
                        </a>
                        <a href="blog-details.html" class="expand"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="blog-area__single-content">
                        <div class="blog-post-date">
                            <p><i class="fa-solid fa-clock"></i>18 Feb, 2022</p>
                            <p><a href="blog-details.html"><i class="fa-solid fa-comments"></i>3 Comments</a></p>
                        </div>
                        <h6><a href="blog-details.html">Don’t Do This Activity After You Donating Your Blood</a></h6>
                        <p class="neutral-bottom">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, magni eos qui ratione voluptatem</p>
                        <a href="blog-details.html" class="read-more">
                            Read More
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 row-item align-center">
                <div class="blog-area__single img-effect">
                    <div class="poster">
                        <a href="blog-details.html">
                            <img src="assets/images/news/helpless-three.png" alt="Poor">
                        </a>
                        <a href="blog-details.html" class="expand"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="blog-area__single-content">
                        <div class="blog-post-date">
                            <p><i class="fa-solid fa-clock"></i>18 Feb, 2022</p>
                            <p><a href="blog-details.html"><i class="fa-solid fa-comments"></i>3 Comments</a></p>
                        </div>
                        <h6><a href="blog-details.html">Donation is hope for the poor helpless children</a></h6>
                        <p class="neutral-bottom">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, magni eos qui ratione voluptatem</p>
                        <a href="blog-details.html" class="read-more">
                            Read More
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="pagination-wrapper">

            <nav aria-label="Page navigation">
                <ul class="pagination  justify-content-center  active">

                    {{ $posts->links() }}
                    {{-- <li class="page-item">
                        <a class="page-link " href="javascript:void(0)">1</a>
                    </li> --}}

                </ul>
            </nav>
        </div>
    </div>
</div>
