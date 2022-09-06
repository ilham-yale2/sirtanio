<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>{{ $page }} - Sirtanio Organik Indonesia</title>
    <meta name="author" content="themsflat.com">

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

    <!-- Favicon and touch icons  -->
    <link href="{{ asset('/icon/apple-touch-icon-48-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('/icon/apple-touch-icon-32-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('/icon/favicon.png" rel="shortcut icon') }}">

    <!-- carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/stylesheet/owl.carousel.min.css') }}">
    <style>
        a {
            color: #5e7169
        }

    </style>

    <style>
        #header2 .overlay {
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            opacity: 0.5;
            background-color: {{ $home->contact_color }};
        }

        .link a {
            color: #e6c951

        }
        .link a:hover {
            text-decoration-line: underline;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    {{-- <div class="preloader">
        <div class="clear-loading loading-effect-2">
            <span></span>
        </div>
    </div> --}}

    {{-- HEADER --}}
    @include('partial.head-contact')


    <section class="section-map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="google-map wow fadeInUp">
                        {!! $contact->maps !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-7 pb-5">
                    <div id="respond" class="comment-respond comment-style wow fadeInUp">
                        <h3 id="reply-title" class="comment-reply-title">Send us a message</h3>
                        <form action="{{ route('message.store') }}" method="post" id="contactform"
                            class="contact-submit">
                            @csrf
                            <div class="text-wrap clearfix">
                                <fieldset class="name-wrap">
                                    <input type="text" id="name" class="tb-my-input" name="name"
                                        tabindex="1" placeholder="Nick name :" value="" size="32"
                                        aria-required="true" required>
                                </fieldset>
                                <fieldset class="email-wrap">
                                    <input type="email" id="email" class="tb-my-input" name="email"
                                        tabindex="2" placeholder="Email Address :" value="" size="32"
                                        aria-required="true" required>
                                </fieldset>
                            </div>
                            <fieldset class="bodyMassage">
                                <textarea id="contact-message" name="message" rows="8" tabindex="4" placeholder="Write a message :"
                                    aria-required="true" required></textarea>
                            </fieldset>
                            <p class="contact-submit ">
                                <input type="submit" id="comment-reply" class="submit">
                            </p>
                        </form>
                    </div><!-- #respond -->
                </div>
                <div class="col-md-5 ">
                    <div class="box-detail px-1 px-md-4 wow fadeInUp">
                        <table  width="100%">
                            
                            <tr class="detail">
                                <td class="contact-title">
                                    <div class="title-24 style-title24">Address</div>
                                </td>
                                <td>:</td>
                                <td class="contact-text">
                                    <div class="tf-text14 margin-top--2">
                                        {{ $contact->addres }}</div>
                                </td>
                            </tr>
                            <tr class="detail">
                                <td class="contact-title">
                                    <div class="title-24 style-title24">Telephone</div>
                                </td>
                                <td>:</td>
                                <td class="contact-text">
                                    <div class="tf-text14 margin-top-5">
                                        {{ $contact->telephone }}</div>
                                </td>
                            </tr>
                            <tr class="detail">
                                <td class="contact-title">
                                    <div class="title-24 style-title24">E-mail</div>
                                </td>
                                <td>:</td>
                                <td class="contact-text">
                                    <div class="tf-text14  text-style-14"><a
                                        href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></div>
                                </td>
                            </tr>
                            <tr class="detail">
                                <td class="contact-title">
                                    <div class="title-24 style-title24">Social</div>
                                </td>
                                <td>:</td>
                                <td class="contact-text">
                                    <div class="tf-text14 icon-contact">
                                        <a href="{{ $general->facebook }}" target="_blank"> <i
                                            class="fa fa-brands fa-square-facebook" aria-hidden="true"></i> </a>
                                        <a href="{{ $general->instagram }}" target="_blank"> <i class="fa fa-brands fa-instagram"
                                                aria-hidden="true"></i> </a>
                                        <a href="{{ $general->whatsapp }}" target="_blank"> <i class="fa fa-brands fa-whatsapp"
                                                aria-hidden="true"></i> </a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    @include('partial.footer')


    {{-- JAVASCRIPT --}}
    @include('partial.js')
</body>
</html> 