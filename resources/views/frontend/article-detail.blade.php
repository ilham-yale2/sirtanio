@extends('layout.main')
@section('css')
<style>
    #header .overlay {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background-color: {{ $home->article_color }};
        opacity: 0.7;
    }
</style>
@endsection
@section('content')
<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="post-wrap">
                    <article class="main-post">
                        <div class="img-box-blog">
                            <img src="{{ asset('storage/' . $article->image) }}" style="height: 428px; width:770px; object-fit:cover" alt=""  class="img-blog-01">
                            <p class="wrap-title-blog">Farm House</p>

                        </div>
                        <div class="heading-post">
                            <h2 class="post-title">{!! $article->title !!}</h2>
                            <p>
                                {!! $article->text !!}
                            </p>
                        </div>

                        {{-- <div class="video-box">
                            <div class="img-video">
                                <img src="images/shortcode/blog-detail-2.png" alt="image" class="">
                                <a href="https://www.youtube.com/watch?v=vOzExn8atds" class="video-play style-video popup-youtube">
                                            <i class="bi bi-play"></i> 	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                                            <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/> </svg>
                                </a>
                            </div>
                            <p>
                                Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc. In sem leo, fermentum at lorem in, porta finibus mauris. Aliquam consectetur, ex in gravida porttitor.
                            </p>
                        </div> --}}

                        {{-- <div id="comments" class="comments-area">
                            <h3 class="comments-title">Comments (03)</h3>
                            <ol class="comment-list">
                                <li class="comment">
                                    <article class="comment-wrap clearfix">
                                        <div class="gravatar"><img alt="image" src="images/shortcode/blog-detail-4.png" /></div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h6 class="comment-author">Kosmi Kotalia</h6>
                                            </div>
                                            <div class="comment-text">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                                    some form, by injected humour, or randomised words which. </p>
                                            </div>
                                            <div class="comment-icon">
                                            <a href="#">	<i class="fa fa-refresh" aria-hidden="true"></i> Repost</a>
                                            <a href="#">	<i class="fa fa-reply-all" aria-hidden="true"></i> Reply </a>
                                            <a href="#">	<i class="fa fa-clock-o" aria-hidden="true"></i> 39 minits ago </a>
                                            </div>
                                        </div>
                                    </article>
                                    <ul class="children">
                                        <li class="comment">
                                            <article class="comment-wrap1 clearfix">
                                                <div class="gravatar"><img alt="image" src="images/shortcode/blog-detail-4.png" /></div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h6 class="comment-author">Kosmi Kotalia</h6>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but
                                                            some form, by injected humour, or randomised words which.</p>
                                                    </div>
                                                    <div class="comment-icon">
                                                        <a href="#">	<i class="fa fa-refresh" aria-hidden="true"></i> Repost</a>
                                                        <a href="#">	<i class="fa fa-reply-all" aria-hidden="true"></i> Reply </a>
                                                        <a href="#">	<i class="fa fa-clock-o" aria-hidden="true"></i> 39 minits ago </a>
                                                        </div>
                                                </div>
                                            </article>
                                        </li><!-- #comment-## -->
                                    </ul><!-- .children -->
                                </li><!-- #comment-## -->
                            </ol><!-- /.comment-list -->

                            <div id="respond" class="comment-respond comment-style wow fadeInUp">
                                <h3 id="reply-title" class="comment-reply-title">Write A Comments</h3>
                                <span class="comment-respond-text">Etiam tristique venenatis metus, eget maximus elit mattis et. Suspendisse felis odio, <br>
                                    Please Enter Your Comments</span><span class="comment-respond-text2">*</span>
                                <form action="contact/contact-process.php" method="post" id="contactform" class="contact-submit">
                                    <div class="text-wrap clearfix">
                                        <fieldset class="name-wrap">
                                            <input type="text" id="name" class="tb-my-input" name="name" tabindex="1" placeholder="Nick name :" value="" size="32" aria-required="true" required>
                                        </fieldset>
                                        <fieldset class="email-wrap">
                                            <input type="email" id="email" class="tb-my-input" name="email" tabindex="2" placeholder="Email Address :" value="" size="32" aria-required="true" required>
                                        </fieldset>
                                    </div>
                                    <fieldset class="message">
                                        <textarea id="contact-message" name="message" rows="8" tabindex="4" placeholder="Write a message :" aria-required="true" required></textarea>
                                    </fieldset>
                                    <p class="contact-submit">
                                        <input name="submit" type="submit" id="comment-reply" class="submit" value="SUBMIT NOW">
                                    </p>
                                </form>
                            </div><!-- #respond -->
                        </div><!--/#comments --> --}}
                    </article>
                </div><!-- /.post-wrap -->
            </div><!-- /.col-md-8 -->

            <div class="col-md-4 col-sm-4">
                <div class="sidebar">
                    {{-- <div class="widget widget_search wow fadeInUp">
                        <h3 class="widget-title">Keyword</h3>
                        <form action="#" method="get" role="search" class="search-form style-1">
                            <input type="search" class="search-field" placeholder="Search Your Keywords..." value="" name="s" title="Search for">
                            <a class="search-submit" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </form>
                    </div> --}}

                    <aside class=" widget widget-categories wow fadeInUp">
                        <h3 class="widget-title-01">Category</h3>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('article.category', ['name' => $category->name]) }}" title="">{{ $category->name }}</a><span class="blogsg-number">{{ $category->articles->count() }}</span></li>
                            @endforeach
                        </ul>
                    </aside><!-- /.widget-categories -->

                    {{-- <aside class="widget widget-tags wow fadeInUp">
                        <h3 class="widget-title-02">Popular Tag</h3>
                        <div class="tag-cloud">
                            <a href="blog.html" title="" class="tag-link">Isabella</a>
                            <a href="blog.html" title="" class="tag-link">Samantha</a>
                            <a href="blog.html" title="" class="tag-link">Emily</a>
                            <a href="blog.html" title="" class="tag-link">Isabella</a>
                            <a href="blog.html" title="" class="tag-link">Lipsona</a>
                            <a href="blog.html" title="" class="tag-link">Grace</a>
                            <a href="blog.html" title="" class="tag-link">Madison</a>
                            <a href="blog.html" title="" class="tag-link">Grace</a>
                            <a href="blog.html" title="" class="tag-link">Isabella</a>
                            <a href="blog.html" title="" class="tag-link">Samantha</a>
                            <a href="blog.html" title="" class="tag-link">Emily</a>
                            <a href="blog.html" title="" class="tag-link">Isabella</a>
                            <a href="blog.html" title="" class="tag-link">Lipsona</a>
                            <a href="blog.html" title="" class="tag-link">Grace</a>
                            <a href="blog.html" title="" class="tag-link">Madison</a>
                            <a href="blog.html" title="" class="tag-link">Grace</a>
                        </div><!-- /.tag-cloud -->
                    </aside><!-- /.widget-tags -->
                    <aside class="widget widget-testimonials wow fadeInUp">
                        <div class="tf-testimonials-box">
                            <img alt="image" src="images/shortcode/22.png" class="">
                            <h3 >
                                Praesent sit amet rutrum orci. Fusce mattis facilisis ante sit amet commodo.
                                Cras fermentum risus mol nisl, a molestie mauris.
                            </h3>
                            <div class="title-user-box">
                                <span class="title-user-01"> Kelis Abraham</span> <span class="title-user-02">UX/UI Designer</span>
                            </div>
                        </div>
                    </aside> --}}
                </div><!-- /.sidebar -->
            </div><!-- /.col-md-4 -->
        </div>
    </div><!-- /.container -->
</section>

{{-- <section class="section2-testimonials style-testimonials">
    <div class="container">
        <div class="row" >
            <div class="col-md-12">
                <div class="themesflat-slider" data-margin="0" data-nav="true" data-dots="false" data-item="1" data-item2="1" data-item3="1">
                    <div class="one-carousel next-prev owl-carousel ">
                        <div class="testimonials-box wow fadeInUp">
                            <div class="slide-testi">
                                <img alt="image" src="images/shortcode/22.png" />
                                <h3>Praesent sit amet rutrum orci. Fusce mattis facilisis ante sit amet commodo. Cras fermentum risus mol nisl, a molestie mauris interdum ac Etiam sed dignissim diam. Cras
                                    nec molestie est ut torto.</h3>
                            </div>
                            <div class="designer-wrap">
                                <span class="title-designer-1"> Kelis Abraham</span> <span class="title-designer-2">UX/UI Designer</span>
                            </div>
                        </div>
                        <div class="testimonials-box wow fadeInUp">
                            <div class="slide-testi">
                                <img alt="image" src="images/shortcode/22.png" />
                                <h3>Praesent sit amet rutrum orci. Fusce mattis facilisis ante sit amet commodo. Cras fermentum risus mol nisl, a molestie mauris interdum ac Etiam sed dignissim diam. Cras
                                    nec molestie est ut torto.</h3>
                            </div>
                            <div class="designer-wrap">
                                <span class="title-designer-1"> Kelis Abraham</span> <span class="title-designer-2">UX/UI Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
