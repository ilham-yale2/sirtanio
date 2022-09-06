<style>

    .slotholder{
        background-color: #52734D!important;

    }

    .slotholder div{
        opacity: .4!important;
    }
    .rev_slider_wrapper {
        height: 100vh!important;
        overflow-y: hidden!important;
    }

    .rev_slider_wrapper .slider2{
        height: 100vh!important;
        
    }
    .rev_slider_wrapper .slider2 ul{
        max-height: unset!important;
        height: 100vh!important;
    }

    .tp-caption{
		min-width: 100%!important;
		display: flex;
		padding-top: 40px;
		justify-content: center;
	}

    .slider2 .tp-parallax-wrap{
        left: 20px!important;
        right: 20px;
    }

    .slider2 .tp-parallax-wrap .tp-loop-wrap{
        left: 0px;
        right: 0px;
    }

    .slider2 .tp-heading{
        max-width: unset!important;
        min-width: unset!important;
        width: 100%;
        text-align: center
    }
    .slider2 .tp-mask-wrap {
        overflow: inherit !important;
        width: 100%!important;
    }

    @media(max-width: 767px){
        

        .landing-title *{
            line-height: unset!important;
            font-size: 40px;
        }

        .landing-text *{
            font-size: 20px!important;
        }
    }
    @media(max-width:500px){
        .landing-title *{
            font-size: 25px!important;
        }
        .landing-text{
            margin: 0px!important;
            padding-top: 40px!important; 
        }
        .landing-text * {
            color: white;
            font-size: 18px!important;
        }

        
    }
</style>

<header id="header-home2">
    <div class="container-fluid">
        <div class="row">
            <div class="btn-menu">
                <span></span>
            </div><!-- //mobile menu button -->
            <div class="header-wrap px-4  px-md-0">
                <div class="col-md-2 h-100">
                    <div id="logo" class="loo h-100">
                        <a href="/" title="">
                            <img src="{{ asset('storage/' . $general->logo_navbar) }}" alt="logo" style="width:200px; "/>
                        </a>
                    </div><!-- /#logo -->
                </div><!-- /.col-md -->
                <div class="col-md-6 col-sm-6 col-12">

                    <div class="nav-wrap">

                        <nav id="mainnav" class="mainnav home1">
                            <ul class="menu">
                                <li class="current-menu-item">
                                    <a href="/" title="">Home</a>
                                </li>
                                <li>
                                    <a href="/about" title=""> About Us </a>
                                </li>
                                <li>
                                    <a href="/products" title=""> Products </a>
                                </li>
                                <li>
                                    <a href="/opportunity" title=""> Opportunity </a>
                                </li>
                                <li>
                                    <a href="/contact" title="">Contact Us </a>

                                </li>
                                <li>
                                    <a href="/article" title="">Article</a>
                                </li>


                            </ul><!-- /.menu -->
                        </nav><!-- /#mainnav -->

                    </div><!-- /.nav-wrap -->
                </div><!-- /.col-md -->
                <div class="col-mt">
                    <div class="header-right">
                        <div class="time">
                            <div class="list-time-1 link"><a class="text-white" href="{{route('contact')}}">{!! $general->nav_contact_1 !!}</a></div>
                            <div class="list-time-2 link"><a class="text-white" href="{{route('contact')}}">{!! $general->nav_contact_2 !!}</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-">
                    <div class="header-right">
                        <div class="list-icon">
                            <div class="list-social">
                                <a href="{{ $general->facebook }}" target="_blank"> <i class="fa fa-brands fa-square-facebook" aria-hidden="true"></i> </a>
                                <a href="{{ $general->instagram }}" target="_blank"> <i class="fa fa-brands fa-instagram" aria-hidden="true"></i> </a>
                                <a href="{{ $general->whatsapp }}" target="_blank"> <i class="fa fa-brands fa-whatsapp" aria-hidden="true"></i> </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="rev_slider_wrapper ">
                <div id="rev-slider2" class="slider2">
                    <ul>
                        <!-- Slide 1 -->
                        @foreach ($slider as $item)
                        <li data-transition="random">

                            <img src="{{ asset('storage/' . $item->bg_img) }}" alt="" data-bgposition="center center"
                                data-no-retina data-opacity="0.6">

                            {{-- <div class="tp-caption tp-resizeme tp-title" data-x="['center','center','center','center']"
                                data-hoffset="['763','760','300','50']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-166','-160','-100','-180']" data-fontsize="['18','18','18','18']"
                                data-lineheight="['29','29','29','29']" data-width="full" data-height="none"
                                data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="400"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <span>grain-grower</span>
                            </div> --}}
                            <!-- Layers -->

                            <div class="tp-caption tp-resizeme tp-heading px-3 px-md-0"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-45','-50','0','-70']"
                                data-fontsize="['72','62','50','42']" data-lineheight="['86','70','64','48']"
                                data-width="800" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <span class="landing-title"> {!! $item->title !!}</span>
                            </div>

                            <div class="tp-caption tp-resizeme tp-sub-headding px-3 px-md-0"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['101','100','90','100']"
                                data-fontsize="['16','16','16','16']" data-lineheight="['29','29','29','29']"
                                data-width="full" data-height="none" data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="600"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <span class="landing-text">{!! $item->sub_title !!}</span>
                            </div>
                            <div class="tp-caption tp-resizeme px-3 px-md-0" data-x="['center','center','center','center']"
                                data-hoffset="['720','720','180','-10']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['222','220','180','250']" data-width="full" data-height="none"
                                data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <a class="gain-button" href="products">See Our Product</a>
                            </div>
                            {{-- <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" 
                                data-hoffset="['890','800','400','170']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['222','200','180','250']" data-width="full" data-height="none"
                                data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <a class="gain-button button-color" href="service.html">See Our farm</a>
                            </div> --}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
    </div>
</header><!-- /header -->
