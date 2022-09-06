<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="UTF-8">
    <title> {{ $page }} </title>
    @yield('partial.meta')

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/stylesheet/bootstrap.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/stylesheet/style.css') }}">

    <!-- icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/stylesheet/icon-1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/stylesheet/responsive.css') }}">

    <link rel="stylesheet" href="https://github.com/dimsemenov/Magnific-Popup/blob/master/dist/magnific-popup.css">

    <!-- Favicon and touch icons  -->
    <link href="{{ asset('/icon/apple-touch-icon-48-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('/icon/apple-touch-icon-32-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('/icon/favicon.png" rel="shortcut icon') }}">

    <!-- carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/stylesheet/owl.carousel.min.css') }}">

    {{-- COBA MODAL --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
    {{-- <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script> --}}

    <style>
        h1,h2,h3,h4,h5,h6{
            color: unset;
        }
        .mfp-wrap{
            z-index: 100002;
        }

        .mfp-ready{
            z-index: 100000;
        }
        a.tngh {
            text-align: center;
        }

        h1.tngh {
            text-align: center;
        }

        img.mt {
            margin-top: 25px;
        }

        .link a {
            color: #e6c951

        }
        .link a:hover {
            text-decoration-line: underline;
        }
        .swal-popup-custom{
            padding: 0px!important;
            border-radius: 15px!important;
        }

        .swal-popup-custom .swal2-image{
            margin:0px !important;
            border-radius: 15px!important
        }
        .swal-popup-custom .swal2-close{
            background: #3b3b3b;
            color: white;
            position: absolute;
            right: -40px;
            top: -40px;
            padding: 5px;
            padding-top: 0px;
            border-radius: 50%;
        }
        .swal-popup-custom .swal2-close:hover{
            background: white!important;
        }

        .about-section iframe{
            width: 740px;
            height: 420px;
        }

        @media(max-width:500px){
            .number-counter, .counter-mobile{
                font-size: 40px!important;
            }
            .heading-counter .title-counter {
                padding-right: 0px;
                color: #3e483c;
            }

            .swal-popup-custom{
                width: 90%!important;
            }

            .swal-popup-custom .swal2-close{
                top: -20px;
                right: -20px;
            }

            .pr-0{
                padding-right: 0px!important;
            }

            .tf-box-icon .tf-icon i{
                font-size: 3em;
            }
        }
    </style>
</head>


<body class="counter-scroll ">

    <style>
        #walink:hover {
            text-decoration: underline;
        }
    </style>
    <!-- Preloader -->

    {{-- <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div> --}}
    {{-- <div class="preloader">
        <div class="clear-loading loading-effect-2">
            <span></span>
        </div>
    </div> --}}
    {{-- HEADER --}}


    @include('partial.head-landing')

    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tf-about center px-1 px-md-0">
                        <h1 class="title-about wow fadeInUp"> {!! $home->title !!} </h1>

                        {{-- <p class="inner-title-about">About Us Our History.</p> --}}
                        <div class="col-md-12 text-about p-0 pr-0 about-section">
                            {!! $home->sub_title !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-service2">
        <div class="container">
            <div class="row">
                <div class="heading-service center wow fadeInUp">
                    <h1 class="title-about px-4 px-md-0" style="margin-bottom: 100px">Benefits of organic red rice</h1>
                </div>
                @foreach ($benefit as $item)
                    {{-- @dd($item->icon) --}}
                    <div class="col-md-3 col-sm-3 rows">
                        <div class="tf-box-icon wow fadeInUp text-center mx-auto rows">
                            {{-- <img src="{{ asset('storage/' . $item->icon) }}" class="tf-icon margin-top--8" style="max-height: 62px; max-width: 70px;"> --}}
                            <div class="tf-icon ">

                                {!! $item->icon !!}
                            </div>
                            <p class="tf-text-icon pr-0 w-100">{{ $item->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="button-sv center">
                <a class="gain-button" href="service.html">All Services</a>
            </div> --}}
        </div>
    </section>

    <section class="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading-counter w-100 mobile-text-center wow fadeInUp">
                        {{-- <p class="subtitle-counter"> Service We Award.</p> --}}
                        <h3 class="title-counter pr-0">{!! $home->deskripsi !!}</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="tf-wrap w-100 mobile-text-center  wow fadeInUp">
                        <span class="counter"> <span class="number-counter counter-style72" data-from="0"
                                data-to="{{ $home->farmer }}" data-speed="2000"
                                data-inviewport="yes">{{ $home->farmer }}</span></span> <span class="counter-style72">
                        </span>
                        <div class="sub-text-counter">
                            <span class="color-black">FARMER PARTNER</span>
                            {{-- <span class="using">Per Day Using    Website.</span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="tf-wrap mobile-text-center wow fadeInUp">
                        <span class="counter "> <span class="number-counter counter-style72" data-from="0"
                                data-to="{{ $home->land }}" data-speed="2000"
                                data-inviewport="yes">{{ $home->land }}</span></span> <span class="counter-mobile counter-style72">
                            ha </span>
                        <div class="sub-text-counter">
                            <span class="color-black">ORGANIC LAND AREA </span>
                            {{-- <span class="using">Per Day Using
                                Website.</span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-portfolio">
        <h1 class="title-about text-center wow fadeInUp">Our Product</h1>
        <div class="container mt-5">
            <div class="row">
                @foreach ($product as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="tf-gallery style-13 wow fadeInUp ">
                            <div class="-gallery mobile-text-center">
                                <a class="popup-gallery" href="{{ asset('storage/' . $item->product_image) }}"> <img
                                        src="{{ asset('storage/' . $item->product_image) }}" alt=""
                                        class="img-galery " style="height: 490px; width:370px; object-fit:cover"></a>
                            </div>
                            <a href="http://bit.ly/sirtanioberasorganik" target="_blank" class="tngh wow fadeInUp">
                                <h3 class="">{{ $item->product_title }}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a class="gain-button button-color mx-auto fadeInUp" href="/products">See Our Product</a>
               
            </div>
    </section>



    <!-- footer -->
    @include('partial.footer')


    {{-- Javascript --}}
    <script src="{{ asset('/javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('/javascript/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/javascript/jquery.easing.js') }}"></script>
    <script src="{{ asset('/javascript/jquery-countTo.js') }}"></script>
    <script src="{{ asset('/javascript/jquery.cookie.js') }}"></script>
    <script src="{{ asset('/javascript/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('/javascript/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('/javascript/parallax.js') }}"></script>
    <script src="{{ asset('/javascript/main.js') }}"></script>

    {{-- animation --}}
    <script src="{{ asset('/javascript/wow.min.js') }}"></script>
    <script src="{{ asset('/javascript/animation.js') }}"></script>


    {{-- Revolution Slider --}}
    <script src="{{ asset('/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('/javascript/rev-slider.js') }}"></script>

    {{-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading --> --}}
    <script src="{{ asset('/rev-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('/rev-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('/rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('/rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('/rev-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('/rev-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('/rev-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('/rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('/rev-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="https://github.com/dimsemenov/Magnific-Popup/blob/master/dist/jquery.magnific-popup.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TFR9S6GN89"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

    gtag('config', 'G-TFR9S6GN89');
    $(document).ready(function () {
        $(document).ready(function () {
            Swal.fire({
                imageUrl: '{{ asset("storage/" . $home->popup_img) }}',
                showCloseButton: true,
                showConfirmButton:false,
                width: '400px',
                height: '400px',
                customClass:{
                    popup: "swal-popup-custom"
                } 
            })
            $('.swal2-image').click(function () {
                window.open('/promotion', '_blank').focus();
            })
        });
    });
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-TFR9S6GN89');
        var html = '';
        $('.section-about img').each(function(e){
            var src =  $(this).attr('src');
            html += `<a href="`+src+`" class="popup-image">
                            <img src="`+src+`" class="" width="740">
                        </a>`
        })
        $('.section-about img').replaceWith(html)

        $('.popup-image').magnificPopup({
            type: 'image',
        })
    </script>


</body>

</html>
