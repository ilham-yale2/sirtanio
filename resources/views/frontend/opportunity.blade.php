@extends('layout.main')
@section('css')
<style>
    div.mt {
        margin-top: 100px;
      }
</style>

<style>
    #header .overlay {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        opacity: 0.7;
        background-color: {{ $home->oppor_color }};
    }

    
    @media(max-width:767px){
        .heading-title-page{
            font-size: 40px!important;
        }
    }

    @media(min-width: 992px){
        .reason-slider .owl-nav {
            display: block!important;
        }
    }
</style>
@endsection
@section('content')
    {{-- Image --}}
    <section class="section2-portfolio">
        <div class="container">

            @isset($img1)

            <div class="rows align-items-center justify-content-center" style="justify-content: center">
                <div class="col-md-3 col-sm-4 ">
                    <div class="img-box wow fadeInUp ">
                        <img src="{{ asset('storage/' . $img1->photo) }}" alt="" class="img-tf-1">
                       
                    </div>
                </div>

                <div class="col-md-5 col-sm-5">
                    <div class="img-box wow fadeInUp active">
                        <img src="{{ asset('storage/' . $img2->photo) }}" alt="" class="img-tf-2">

                    </div>
                </div>
                <div class="col-md-3 col-sm-4 ">
                    <div class="img-box wow fadeInUp">
                        <img  src="{{ asset('storage/' . $img3->photo) }}" alt="" class="img-tf-3">

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3 col-sm-4 px-md-0">
                    <div class="img-box wow fadeInUp">
                        <img src="{{ asset('storage/' . $img4->photo) }}" alt="" class="img-tf-4">

                    </div>
                </div>
                <div class="col-md-5 col-sm-4">
                    <div class="img-box wow fadeInUp">
                        <img src="{{ asset('storage/' . $img5->photo) }}" alt="" class="img-tf-5">

                    </div>
                </div>
                <div class="col-md-3 col-sm-4 px-md-0">
                    <div class="img-box wow fadeInUp">
                        <img src="{{ asset('storage/' . $img6->photo) }}" alt="" class="img-tf-6">

                    </div>
                </div>
            </div>
            @endisset
            <div class="button2-portfolio center">
                <a class="gain-button" href="/contact">Contact Us</a>
            </div>
        </div>
    </section>
    {{-- EndImage --}}

    {{-- Reason --}}
    <section class="section4-testimonials ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-slider" data-margin="0" data-nav="true" data-dots="true" data-item="1"
                        data-item2="1" data-item3="1">
                        <div class="one-carousel next-prev owl-carousel wow fadeInUp reason-slider">
                            @foreach ($reason as $index => $p)
                                <div class="testimonials-box center">
                                    <div class="slide-testi">
                                        {{-- <img alt="image" src="images/shortcode/22.png" /> --}}
                                        <h3 class="px-1 px-md-0">{{ $p->reason }} </h3>
                                    </div>
                                    <div class="designer-wrap">
                                        {{-- {{ $index + 1 }} --}}
                                        <span class="title-designer-1">{{ $total }} Reasons Why Choose Sirtanio?</span> <span class="title-designer-2"> Of {{ $index + 1 }}</span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="mt">
                        <div class="tf-gallery style-13 wow fadeInUp ">
                            <div class="">
                                <a class="popup-gallery" href="{{ asset('storage/' . $img7->photo) }}"> <img
                                        src="{{ asset('storage/' . $img7->photo) }}" alt="" class="img-galery rounded-10"></a>
                            </div>
                        </div>
                        <a href="" class="tngh wow fadeInUp"><h3 class=""></h3></a>
                    </div>
                </div>
                <div class="button2-portfolio center">
                    <a class="gain-button" href="/contact">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    {{-- EndReason --}}

@endsection
