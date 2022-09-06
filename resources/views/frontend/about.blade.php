@extends('layout.main')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
<style>
    #header .overlay {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        opacity: 0.7;
        background-color: {{ $home->about_color }}; 
    }
</style>
@endsection
@section('content')
<section class="section-about tf-bottom ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 px-4 px-md-0">
                <div class="tf-about center wow fadeInUp">
                    <h1 class="title-about mb-0"> {!! $about->about_title !!}</h1>
                    <p class="text-about mb-0">
                        {!! $about->about_text !!}
                    </p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 px-4 px-md-0">
                <div class="tf-text-service wow fadeInUp">
                    <h1 class="title-about mobile-text-center"> {!! $about->value_title !!} </h1>
                    <p class="text-about mt-4">
                        {!! $about->value_text !!}
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 px-2 px-md-4">
                <div class="tf-text-service wow fadeInUp">
                    <h1 class="title-about mobile-text-center"> {!! $about->vision_title !!} </h1>
                    <p class="text-about mt-4">
                        {!! $about->vision_text !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-team">
    <div class="container">
        <div class="heading-team center px-2 px-md-0">
            <h1 class="title-team-home wow fadeInUp">Our Special Member</h1>
        </div>
        <div class="themesflat-slider slider-team" data-timeout="3000" data-auto="true" data-margin="30" data-nav="true" data-dots="false" data-item="4"
            data-item2="2" data-item3="1">
            <div class="team1-carousel owl-carousel owl-theme">
                @foreach ($team as $item)
                <div class="team-box wow fadeInUp">
                    <div class=""> <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->photo }}"
                            class="img-team-box"> </div>
                    <div class="list-team-box">
                            <h3 class="title-team-box"> {{ $item->name }} </h3>
                        <span class="icon-team">
                            {{ $item->position }}
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<section class="section-service2">
    <div class="container">
        <div class="heading-service center wow fadeInUp">
            <h1 class="title-service title-about">Our Partners </h1>
        </div>
        <div class="row align-items-center rows my-5 px-2 px-md-0">
            @foreach ($partner as $item)
            <div class="col-md-3 col-sm-3">
                <div class="tf-box-icon wow fadeInUp">
                    <img src="{{ asset('storage/' . $item->image) }}" class="tf-icon" >
                </div>
            </div>
            @endforeach
        </div>
        {{-- <div class="button-sv center">
            <a class="gain-button" href="service.html">All Services</a>
        </div> --}}
    </div>
</section>

<section class="section-history-style">
    <div class="container">
        <div class="rows">
            <div class="col-md-6 col-sm-6 mb-5 ">
                <div class="tf-img-history text-right mobile-text-center px-md-4">
                    <img src="{{ asset('storage/' . $about->certificate_img) }}" alt="" class="img-1-history ">
                    {{-- <img src="images/home/history-2.png" alt="" class="img-2-history">
                    <img src="images/home/history-3.png" alt="" class="img-3-history"> --}}
                </div>
            </div>

            <div class="col-md-6 col-sm-6 px-2 px-md-0 mb-5">
                <div class="heading-history tf-heading wow fadeInUp">
                    {{-- <p class="subtitle-history ">Fresh Vegetables.</p> --}}
                    <h1 class="title-history">{!! $about->certificate_title !!}</h1>
                    <p class="text-history">{!! $about->certificate_text !!}</p>
                </div>
            </div>
            <div class="rows w-100 fadeInUp" style="justify-content: center">
                {{-- <div class="button-history">
                    <a class="gain-button button-color color2" href="service-detail.html">All View More +</a>
                </div> --}}
            </div>
        </div>
    </div>
</section>

{{-- <section class="section-banner parallax1">
    <div class="overlay-banner"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="tf-banner center wow fadeInUp">
                    <img src="images/home/15.png" alt="image" class="">
                    <div class="title-banner">A person who is specializes in this field
                        is called as “Agriculturists”.</div>
                    <div class="button-banner">
                        <a class="gain-button" href="team.html">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> --}}

<section class="section-testimonials-style">
    <div class="container">
        <h2 class="center text-white">Our Journey</h2>
        <div class="d-flex w-100 mb-5" >
            <div class="col-md-1"></div>
            <div class="d-flex ml-auto" >
                <div class="prev btn rounded-circle btn-warning">
                    <span class="iconify" data-icon="ooui:previous-ltr"></span>
                </div>
                <div class="next btn rounded-circle btn-warning">
                    <span class="iconify" data-icon="ooui:previous-rtl"></span>
                </div>
            </div>
        </div>
        <div class="row" >
            
            <div class="col-md-12">
                <div class="themesflat-slider" data-auto="true" data-speed="2000" data-margin="0" data-nav="true" data-dots="false" data-item="1" data-item2="1" data-item3="1">
                    <div class="slick-testimony  wow fadeInUp">
                        @for ($i = 0; $i < 4; $i++)    
                            @foreach ($journey as $item)
                            <div class="testimonials-box-style">
                                <div class="slider-testi">
                                    {{-- <img alt="image" src="images/download.jpg" /> --}}
                                    <h3 class="title-testimonials px-2 px-md-0">{!! $item->body !!}</h3>
                                </div>

                                    <div class="title-designer-01"> {{ $item->year }}</div>
                            </div>
                            @endforeach
                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"z></script>
    <script>
        $('.slick-testimony').slick({
            arrows: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            infinite:true,
            dots: true,
        })
    </script>
@endsection