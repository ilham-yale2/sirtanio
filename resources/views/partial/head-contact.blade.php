<header id="header2">
    <div class="overlay"></div>
    <div class="btn-menu">
        <span></span>
    </div><!-- //mobile menu button -->
    <div class="container-fluid px-md-0">
        <div class="">
            <div class="header-wrap row mx-0 px-4 px-md-0">
                <div class="col-md-2 h-100">
                    <div id="logo" class="log h-100">
                        <a href="/" title="">
                            <img src="{{ asset('storage/' . $general->logo_navbar) }}" alt="logo" style=" width:200px; "/>
                        </a>
                    </div><!-- /#logo -->
                </div><!-- /.col-md -->
                <div class="col-lg-6 col-md-12">
                    <nav id="mainnav" class="mainnav ">
                        <ul class="menu">
                            <li class="{{ $page === 'Sirtanio Organik Indonesia' ? 'current-menu-item' : '' }}">
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

                            <li class="{{ $page === 'Contact' ? 'current-menu-item' : '' }}">
                                <a href="/contact" title="">Contact Us </a>

                            </li>
                            <li class="{{ $page === 'Blog' ? 'current-menu-item' : '' }}">
                                <a href="/article" title="">Article</a>
                            </li>

                            {{-- <li class="{{ $page === 'Blog' ? 'current-menu-item' : '' }}"><a href="/blog" title="">Blog</a></li> --}}


                        </ul><!-- /.menu -->
                    </nav><!-- /#mainnav -->
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
            <div class="wrap-banner banner-style2">
                <div class="heading-title-page">
                    {!! $page === 'Contact' ? $home->contact_title : '' !!}
                </div>
                <span class="heading-title-content">
                    <span><a href="/"> Home </a></span>
                    <span class="style-5">  {!! $page === 'Contact' ? $home->contact_title : '' !!}</span>
                </span>
            </div>
        </div><!-- /.row -->
    </div>

</header><!-- /header -->
