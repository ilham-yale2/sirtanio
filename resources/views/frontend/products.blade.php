@extends('layout.main')
@section('css')
<style>
a.tngh {
  text-align: center;
},

</style>

<style>
    #header .overlay {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        background-color: {{ $home->product_color }};
        opacity: 0.7;
    }
</style>
@endsection

@section('content')
    <section class="section-gallery">
        <div class="container">
            <div class="row">
                @foreach ($product as $item)
                    <div class="col-md-4 col-sm-4">
                        <div class="tf-gallery style-13 wow fadeInUp ">
                            <div class="-gallery">
                                <a class="popup-gallery" href="{{ asset('storage/' . $item->product_image) }}"><img
                                src="{{ asset('storage/' . $item->product_image) }}" alt="" class="img-galery" style="height: 490px; width:370px; object-fit:cover"></a>
                            </div>
                        </div>
                        <a href="http://bit.ly/sirtanioberasorganik" target="_blank" class="tngh wow fadeInUp"><h3 class="">{{ $item->product_title }}</h3></a>
                    </div>
                @endforeach

            </div>
            <div class="button-gallery center">
                <a target="_blank" href="{{ $general->tokopedia }}"><img src="images/tokopedia.png" style="height: 60px; width:60px;" alt="" class=""></a>
                <a target="_blank" href="{{ $general->shopee }}"><img src="images/shopee.png" style="height: 60px; width:60px;" alt="" class=""></a>
                {{-- <a class="gain-button" href="gallery.html">All View More +</a> --}}
            </div>
        </div>

    </section>

@endsection

