<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('stylesheet/modal.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <title>Sirtanio.id</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

    </style>
  </head>
  <body>
    <div class="banner__promotion">
        <div class="container">
            <div class="row h-100">
                <div class="col-12 pb-5 pt-0 pt-md-5">
                    <div class="img-brand">
                        <img src="{{asset('assets/images/logo-white.png')}}" width="100" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-5 mx-auto offset-md-2 text-right">
                    <img src="{{asset('assets/images/beras-merah.png')}}" class="w-100" alt="">
                </div>
                <div class="col-md-6 text-white pt-4 pt-md-5">
                    <h5>Kami hadirkan 1.000Kg Beras Merah untuk kamu agar bebas dari Penyakit Diabetes</h5>
                    <p>Menuju Indonesia Lebih Sehat bersama Sirtanio</p>
                    <a href="#participant" class="btn bg-white text-danger">Dapatkan</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container section-1 pt-5">
        <div class="text-center">
            <h3 class="text-danger">Tau gak sih?</h3>
            <h2 class="text-heading">Risiko dari Komplikasi Penyakit Gula</h2>
            <p class="px-4">
                Komplikasi Diabetes Melitus sangat berbahaya dan bisa menyerang seluruh organ tubuh, mulai dari mata hingga ujung kaki. Penting bagi kita untuk menjaga tubuh sejak dini agar terhindar dari diabetes
            </p>

            <div class="row mb-4">
                <div class="col-md-4 text-center mb-3">
                    <img src="{{asset('assets/images/foot.png')}}" width="150" alt="">
                    <p class="mb-0 mt-3">Masalah Kaki dan Kulit </p>
                    <i>(Ulkus Diabetikum)</i>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <img src="{{asset('assets/images/eye.png')}}" width="150" alt="">
                    <p class="mb-0 mt-3">Gangguan Retina </p>
                    <i>(Retinopati Diabetik)</i>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <img src="{{asset('assets/images/kidney.png')}}" width="150" alt="">
                    <p class="mb-0 mt-3">Kerusakan Ginjal </p>
                    <i>(Nefropati Diabetik)</i>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <img src="{{asset('assets/images/heart.png')}}" width="150" alt="">
                    <p class="mb-0 mt-3">Penyempitan Arteri </p>
                    <i>(Aterosklerosis)</i>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <img src="{{asset('assets/images/brain.png')}}" width="150" alt="">
                    <p class="mb-0 mt-3">Stroke dan serangan jantung</p>
                    <i>(Nefropati Diabetik)</i>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <img src="{{asset('assets/images/tooth.png')}}" width="150" alt="">
                    <p class="mb-0 mt-3">Kerusakan Syaraf </p>
                    <i>(Deuropati Diabetik)</i>
                </div>
            </div>
            <p class="px-4">
                Dengan mengendalikan kadar gula darah agar tidak merusak organ-organ tubuh dan penanganan seperti pengaturan gizi, dan penerapan pola hidup sehat harus diterapkan agar terhindar dari Diabetes Melitus.
            </p>
        </div>
        <div class="mt-5">
            <h2 class="text-heading text-center text-heading">Jumlah Penderita Diabetes di Indonesia
                Tahun 2020
            </h2>
            <div class="row justify-content-center mt-5">
                <div class="col-md-4 col-6 text-center">
                    <div class="count text-danger">
                        <h1 class="mb-0 mr-2 d-inline-block">10,8</h1>
                        <span class="d-inline-block">jt</span>
                    </div>
                    <p>Penderita Diabetes</p>
                </div>
                <div class="col-md-4 col-6 text-center">
                    <div class="count text-danger">
                        <h1 class="mb-0 d-inline-block mr-2">6,2</h1><span class="d-inline-block">%</span>
                    </div>
                    <p>Penduduk Indonesia</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="bg-danger mt-5 py-5">
        <div class="text-center text-white">
            <h1 class="text-heading"><b>Ini kata mereka yang berhasil menjaga gula darah karena mengkonsumsi Beras Merah Organik Sirtanio</b></h1>
        </div>
        <div class="container">
            <div class="slider-testimony mt-4">
                @foreach ($testimonials as $item)    
                <div class="px-3">
                    <div class="item-slide-testy py-5 bg-white rounded shadow" >
                        <div class="d-flex w-100 align-items-start">
                            <div class="d-none d-md-flex p-3 bg-danger text-white slider-before">
                                <img src="{{asset('assets/images/icon.png')}}" alt="">
                            </div>
                            <div class="ml-md-4 col-12 col-md-10">
                                <h3 class="mb-0 d-inline-block mr-3">User</h3><span class="text-danger d-inline-block">{{$item->note}}</span>
                                <p class="mt-3">{{$item->message}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <div class="container pt-5">
        <h1 class="text-center col-md-6 mx-auto mb-5 text-heading"><b>Kenapa sih harus konsumsi Beras Merah Sirtanio?</b></h1>
        <div class="row mx-0">
            <div class="col-md-4 text-center mb-2">
                <img src="{{asset('assets/images/shipping-box.png')}}" width="120" alt="">
                <p class="mt-3 px-3">
                    Memiliki stok produksi yang selalu tersedia
                </p>
            </div>
            <div class="col-md-4 text-center mb-2">
                <img src="{{asset('assets/images/healty.png')}}" width="120" alt="">
                <p class="mt-3 px-3">
                    Memiliki indeks glikemiks rendah dan terbukti dengan sertifikasi nilai gizi
                </p>
            </div>
            <div class="col-md-4 text-center mb-2">
                <img src="{{asset('assets/images/good.png')}}" width="120" alt="">
                <p class="mt-3 px-3">
                    Memiliki rasa yang enak, lembut dan wangi
                </p>
            </div>
            <div class="col-md-4 text-center mb-2">
                <img src="{{asset('assets/images/shipping-box-open.png')}}" width="120" alt="">
                <p class="mt-3 px-3">
                    Dikemas dengan kemasan vacum sehingga memiliki ketahanan produk lebih dari setahun
                </p>
            </div>
            <div class="col-md-4 text-center mb-2">
                <img src="{{asset('assets/images/sheaf-of-rice.png')}}" width="120" alt="">
                <p class="mt-3 px-3">
                    Varietas khusus yang hanya didapatkan dari banyuwangi
                </p>
            </div>
            <div class="col-md-4 text-center mb-2">
                <img src="{{asset('assets/images/farmer.png')}}" width="120" alt="">
                <p class="mt-3 px-3">
                    Satu-satunya beras organik yang setiap keuntungan penjualannya dibagikan secara fair trade kepada mitra petani
                </p>
            </div>
        </div>
        <div class="mt-5 w-100">
            <div class="w-100" id="slider-second">
                {{-- @for ($i = 1; $i < 7; $i++)
                    <div class="px-2">
                        <img class="rounded w-100" src="{{asset('assets/images/image-'.$i.'.jpg')}}" alt="">
                    </div>
                @endfor --}}
                @foreach ($sliders as $item)
                    <div class="px-2">
                        <img class="rounded w-100" src="{{asset('storage/'.$item->source)}}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mt-5">
            <h1 class="text-center mb-5 text-heading">Manfaat Beras Merah Sirtanio</h1>
            <div class="row mx-0">
                <div class="col-md-4 text-center mb-2">
                    <img src="{{asset('assets/images/brain-circuit.png')}}" width="120" alt="">
                    <p class="mt-3 px-3">
                        Meningkatkan kecerdasan otak balita dan anak
                    </p>
                </div>
                <div class="col-md-4 text-center mb-2">
                    <img src="{{asset('assets/images/blood-bank.png')}}" width="120" alt="">
                    <p class="mt-3 px-3">
                        Mengontrol tingkat kadar gula
                    </p>
                </div>
                <div class="col-md-4 text-center mb-2">
                    <img src="{{asset('assets/images/healty-fill.png')}}" width="120" alt="">
                    <p class="mt-3 px-3">
                        Mengurangi kadar kolesterol
                    </p>
                </div>
                <div class="col-md-4 text-center mb-2">
                    <img src="{{asset('assets/images/lungs.png')}}" width="120" alt="">
                    <p class="mt-3 px-3">
                        Mengurangi kadar kolesterol
                    </p>
                </div>
                <div class="col-md-4 text-center mb-2">
                    <img src="{{asset('assets/images/heart-fill.png')}}" width="120" alt="">
                    <p class="mt-3 px-3">
                        Mengurangi tekanan darah tinggi
                    </p>
                </div>
                <div class="col-md-4 text-center mb-2">
                    <img src="{{asset('assets/images/heart-plus.png')}}" width="120" alt="">
                    <p class="mt-3 px-3">
                        Mengurngi resiko serangan jantung
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 bg-danger">
        <div class="container py-5">
            <h1 class="text-center text-heading col-md-10 mx-auto text-white">
                Jangan khawatir semua izin dan sertifikasi kami sudah lengkap, aman dan tentunya terjamin
            </h1>
            <div class="row mt-5">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="card-product bg-white shadow text-center mb-4 px-5 py-3 rounded">
                        <img src="{{asset('assets/images/beras-merah-1.png')}}" height="150" alt="">
                        <h4 class="mb-0 mt-3">Beras Merah</h4>
                    </div>
                    <a href="#" class="text-center text-white" style="text-decoration: none">
                        <h6>Lihat Sertifikasi</h6>
                    </a>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="card-product bg-white shadow text-center mb-4 px-5 py-3 rounded">
                        <img src="{{asset('assets/images/beras-hitam.png')}}" height="150" alt="">
                        <h4 class="mb-0 mt-3">Beras Hitam</h4>
                    </div>
                    <a href="#" class="text-center text-white" style="text-decoration: none">
                        <h6>Lihat Sertifikasi</h6>
                    </a>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="card-product bg-white shadow text-center mb-4 px-5 py-3 rounded">
                        <img src="{{asset('assets/images/beras-putih.png')}}" height="150" alt="">
                        <h4 class="mb-0 mt-3">Beras Putih</h4>
                    </div>
                    <a href="#" class="text-center text-white" style="text-decoration: none">
                        <h6>Lihat Sertifikasi</h6>
                    </a>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="card-product bg-white shadow text-center mb-4 px-5 py-3 rounded">
                        <img src="{{asset('assets/images/beras-coklat.png')}}" height="150" alt="">
                        <h4 class="mb-0 mt-3">Beras Coklat</h4>
                    </div>
                    <a href="#" class="text-center text-white" style="text-decoration: none">
                        <h6>Lihat Sertifikasi</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5"  >
        <div class="row">
            <div class="col-12 mx-auto mb-5">
                <iframe class="w-100" height="630" src="https://www.youtube.com/embed/sP1h5SUO4C0" title="Sirtanio Organik Indonesia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h2 class="col-md-9 mx-auto mt-5 col-12 text-center text-heading">Buat kamu yang mau 1kg Beras Merah silahkan
                masukkan datamu disini</h2>
            @if (Session::has('message'))
                <div class="col-md-7 mx-auto">
                    <div class="alert alert-{{Session::get('message')['status']}} alert-dismissible fade show" role="alert">
                        <p class="mb-0">{{Session::get('message')['text']}}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
            <form action="{{route('user.participant.store')}}" method="POST" class="col-md-10 row mx-auto mt-3" id="participant">
                @csrf
                <div class="form-group col-md-6">
                    <label for="full_name">Nama Lengkap Penerima</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" required value="{{old('full_name')}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="age">Usia</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{old('age')}}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="profession">Pekerjaan</label>
                    <input type="text" class="form-control" id="profession" name="profession" value="{{old('profession')}}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="phone_number">Nomor Telepone/Whatsapp</label>
                    <input type="text" value="{{old('phone_number')}}" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" required>
                    @error('phone_number')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="shipping_address">Alamat Pengiriman</label>
                    <textarea class="form-control" name="shipping_address" id="shipping_address" rows="4">{{old('shipping_address')}}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="reason">Kenapa kami Harus memilih anda?</label>
                    <textarea class="form-control" name="reason" id="reason" rows="4">{{old('reason')}}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{old('instagram')}}" required>
                </div>
                <div class="form-group col-md-6">
                    <button class="btn btn-danger rounded-pill mt-4 px-5">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <div class="bg-warning py-3 py-md-4 mt-5">
        <div class="container">
            <div class="row mx-0 align-items-center">
                <h2 class="mb-3 text-danger text-heading mx-auto mx-md-0 mobile-center">
                    Gratis Ongkir Selama Bulan September
                </h2>
                <div class="mx-auto mx-0 ml-auto">
                    <a target="_blank" href="{{$general->shopee}}" class="btn btn-danger rounded-pill">Order Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="col-md-8 mx-auto">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-product shadow rounded text-center px-4 py-3">
                        <img src="{{asset('assets/images/beras-merah-1.png')}}" height="180" alt="">
                        <h3 class="mb-0 mt-3">Beras Merah</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-product shadow rounded text-center px-4 py-3">
                        <img src="{{asset('assets/images/beras-hitam.png')}}" height="180" alt="">
                        <h3 class="mb-0 mt-3">Beras Hitam</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-product shadow rounded text-center px-4 py-3">
                        <img src="{{asset('assets/images/beras-putih.png')}}" height="180" alt="">
                        <h3 class="mb-0 mt-3">Beras Putih</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-product shadow rounded text-center px-4 py-3">
                        <img src="{{asset('assets/images/beras-coklat.png')}}" height="180" alt="">
                        <h3 class="mb-0 mt-3">Beras Coklat</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-warning py-3 py-md-4 mt-5">
        <div class="container">
            <div class="row mx-0 align-items-center">
                <h2 class="mb-3 text-danger mobile-center mx-auto mx-md-0 text-heading">
                    Tertarik Untuk Menjadi Reseller Kami?
                </h2>
                <div class="mx-auto mx-md-0 ml-md-auto ">
                    <a target="_blank" href="{{$general->whatsapp}}" class="btn btn-danger rounded-pill ml-auto">Gabung Reseller</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5" id="reseller">
        <div class="row">
            <h4 class="col-md-9 mx-auto mt-5 col-12 text-center">Atau isi form berikut untuk jadi reseller </h4>
            @if (Session::has('reseller'))
                <div class="col-md-7 mx-auto">
                    <div class="alert alert-{{Session::get('reseller')['status']}} alert-dismissible fade show" role="alert">
                        <p class="mb-0">{{Session::get('reseller')['text']}}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
            <form action="{{route('user.reseller.store')}}" method="POST" class="col-md-7 row mx-auto mt-3">
                @csrf
                <div class="form-group col-md-12">
                    <label for="full_name">Nama Lengkap</label>
                    <input type="text" class="form-control @error('reseller_name') is-invalid @enderror" value="{{old('reseller_name')}}" id="full_name" name="reseller_name" required>
                    @error('reseller_name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="phone_reseller">Nomor Telepone/Whatsapp</label>
                    <input type="text" class="form-control @error('phone_reseller') is-invalid @enderror" value="{{old('phone_reseller')}}" id="phone_reseller" name="phone_reseller" required>
                    @error('phone_reseller')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="reseller_address">Alamat Pengiriman</label>
                    <textarea class="form-control @error('reseller_address') is-invalid @enderror" value="{{old('reseller_address')}}" name="reseller_address" required  id="reseller_address" rows="4"></textarea>
                    @error('reseller_address')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <button class="btn btn-danger rounded-pill mt-4 px-5">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <footer class="py-5 bg-danger">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-5 mx-auto mx-md-0 text-center pt-md-5 px-md-4">
                    <img src="{{asset('assets/images/logo-white.png')}}" class="w-100" alt="">
                </div>
                <div class="col-md-3 text-white mb-4">
                    <h3 class="mb-4 text-heading">Lokasi</h3>
                    <h6>Jl. Hasanudin, Dusun Krajan, Genteng Wetan, Kec. Genteng, Kabupaten Banyuwangi, Jawa Timur 68465</h6>
                </div>
                <div class="col-md-3 text-white mb-4">
                    <h3 class="mb-4 text-heading">Kontak</h3>
                    <div class="d-flex align-items-center">
                        <span class="iconify" data-width="25" data-icon="bi:telephone-fill"></span>
                        <h5 class="ml-2">+62 813-3155-4958</h5>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <span class="iconify" data-width="25" data-icon="bi:envelope"></span>
                        <h5 class="ml-2">sirtanio.id@gmail.com</h5>
                    </div>
                </div>
                <div class="col-md-3 text-white mb-4">
                    <h3 class="text-heading">Temukan Kami di</h3>
                    <div class="row">
                        <div class="col-3 text-center">
                            <div class="bg-white rounded text-dark p-2 d-flex justify-content-center d-md-block">
                                <a target="_blank" class="text-dark" href="{{$general->instagram}}">
                                    <span class="iconify d-none d-md-block" data-width="25" data-icon="akar-icons:instagram-fill"></span>
                                    <span class="iconify d-block d-md-none" data-width="45" data-icon="akar-icons:instagram-fill"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <div class="bg-white rounded text-dark p-2 d-flex justify-content-center d-md-block">
                                <a target="_blank" class="text-dark" href="https://www.youtube.com/channel/UC0zDIw7m_IxyFd014C_F_Gw">
                                    <span class="iconify d-none d-md-block" data-width="25" data-icon="ant-design:youtube-outlined"></span>
                                    <span class="iconify d-block d-md-none" data-width="45" data-icon="ant-design:youtube-outlined"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <div class="bg-white rounded text-dark p-2 d-flex justify-content-center d-md-block">
                                <a target="_blank" class="text-dark" href="https://www.tiktok.com/@sirtanio.id">
                                    <span class="iconify d-none d-md-block" data-width="25" data-icon="akar-icons:tiktok-fill"></span>
                                    <span class="iconify d-block d-md-none" data-width="45" data-icon="akar-icons:tiktok-fill"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-4 text-heading">Online Order</h3>
                    <div class="row">
                        <div class="col-3 text-center">
                            <div class="bg-white rounded text-dark p-1">
                                <a target="_blank" href="{{$general->shopee}}">
                                    <img src="{{asset('assets/images/shopee.png')}}" class="w-100" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <div class="bg-white rounded text-dark p-1">
                                <a target="_blank" href="{{$general->tokopedia}}">
                                    <img src="{{asset('assets/images/tokopedia.png')}}" class="w-100" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5">
            <div class="py-4">
            </div>
        </div>
    </footer>
    
    <div class="position-fixed bg-danger text-white w-100 py-md-5 py-3" style="bottom: 0px">
        <div class="container">
            <div class="row mx-0 align-items-center">
                <h3 class="mb-1 mb-md-0 mobile-center text-heading mx-auto mx-md-0">Gratis Ongkir Selama Bulan Desember</h3>
                <div class="mx-auto mx-md-0 ml-md-auto mt-3 mt-md-0">
                    <a target="_blank" href="https://bit.ly/sirtanio-order" class="rounded-pill btn bg-white text-danger">Order Sekarang</a>
                    <button class="btn p-1 p-md-2 ml-2 btn-success rounded-circle">
                        <a target="_blank" href="{{$general->whatsapp}}" class="text-white">
                            <span class="iconify d-none d-md-block" data-icon="akar-icons:whatsapp-fill" data-width="30"></span>
                            <span class="iconify d-block d-md-none" data-icon="akar-icons:whatsapp-fill" data-width="26"></span>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    <script>
        $('.slider-testimony').slick({
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
        })
        $('#slider-second').slick({
            dots:true,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false
        })
        @if($errors->any() || Session::get('message'))
            window.location.href = '#participant'
        @endif

        @if($errors->reseller_name || Session::get('reseller'))
            window.location.href = '#reseller'
        @endif
    </script>
  </body>
</html>