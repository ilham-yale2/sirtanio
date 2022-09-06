<header id="header">
    <div class="overlay" style="background-image: https://i.stack.imgur.com/fhEwl.png"></div>
    <div class="btn-menu">
        <span></span>
    </div><!-- //mobile menu button -->
    <div class="container-fluid">
        <div class="row">
            <div class="header-wrap px-4 px-md-0">
                <div class="col-md-2 h-100">
                    <div id="logo" class="ogo h-100">
                        <a href="/" title="">
                            <img src="{{ asset('storage/' . $general->logo_navbar) }}" style="width:200px;"/>
                        </a>
                    </div><!-- /#logo -->
                </div><!-- /.col-md -->
                <div class="col-lg-6 col-md-12">


                    <nav id="mainnav" class="mainnav ">
                        <ul class="menu">
                            <li class="{{ $page === 'Sirtanio Organik Indonesia' ? 'current-menu-item' : '' }}">
                                <a href="/" title="">Home</a>
                            </li>
                            <li class="{{ $page === 'About us' ? 'current-menu-item' : '' }}">
                                <a href="/about" title=""> About Us </a>
                            </li>
                            <li class="{{ $page === 'Products' ? 'current-menu-item' : '' }}">
                                <a href="/products" title=""> Products </a>
                            </li>
                            <li class="{{ $page === 'Opportunity' ? 'current-menu-item' : '' }}">
                                <a href="opportunity" title=""> Opportunity </a>
                            </li>

                            <li class="{{ $page === 'Contact' ? 'current-menu-item' : '' }}">
                                <a href="/contact" title="">Contact Us </a>

                            </li>
                            <li class="{{ $page === 'Article' ? 'current-menu-item' : '' }}{{ $page === 'Article Category' ? 'current-menu-item' : '' }}{{ $page === 'Article Detail' ? 'current-menu-item' : '' }}">
                                <a href="/article" title="">Article</a>
                            </li>

                        </ul>
                    </nav>
                </div>

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
        </div>
        <div class="wrap-banner">
            <div class="heading-title-page">
                {!! $page === 'Opportunity' ? $home->oppor_title : '' !!}{{ $page === 'Article Detail' ? 'Article ' . strip_tags($article->title) : '' }}{!! $page === 'Article Category' ? 'Article' : '' !!}{!! $page === 'Article' ? $home->article_title : '' !!}{!! $page === 'About us' ? $home->about_title : '' !!}{!! $page === 'Products' ? $home->product_title : '' !!}
            </div>
            <span class="heading-title-content">
                <span><a href="/"> Home </a></span>
                <span class="style-5">  {!! $page === 'About us' ? $home->about_title : '' !!} {!! $page === 'Article Category' ? $home->article_title : '' !!} {{ $page === 'Article Detail' ? 'Article ' . strip_tags($article->title) : '' }} {!! $page === 'Products' ? $home->product_title : '' !!}  {!! $page === 'Opportunity' ? $home->oppor_title : '' !!} {!! $page === 'Article' ? $home->article_title : '' !!}</span>
            </span>
        </div>
    </div>
</header><!-- /header -->
