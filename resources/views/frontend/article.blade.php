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
<section class="main-blog">
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 col-sm-4">
                    <div class="our-news-box wow fadeInUp">
                        <div class="img-news-box"> <img src="{{ asset('storage/' . $article->image) }}" style="height: 290px; width:370px; object-fit:cover" alt="" class="">  <div class="overlay-news"></div></div>
                        <div class="list-news">
                            <p class="wrap-title-news"> Farm House </p>
                            <a href="/article/{{ $article->slug }}" class=""><h3  class="" > {!! $article->title !!} </h3></a>
                            <p class="subtext-blog" >
                                {!! substr(strip_tags($article->text) , 0, 30) !!}....
                            </p>
                            {{-- <span class="list-icon-news">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> </a>
                                <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> </a>
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> </a>
                            </span> --}}
                            <a href="/article/{{ $article->slug }}"  class="icon-right-box"><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="button-blog center">
            <a class="gain-button button-color color2" href="blog.html">All View More +</a>
        </div>

    </div>

</section>
@endsection
