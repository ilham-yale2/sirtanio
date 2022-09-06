@extends('layout.dashboard')

@section('content')
    {{-- @dd($general) --}}
    <div class="page-content">
        <div class="main-wrapper">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Navbar</h5>
                            <form action="/admin/general/{{ $general->id }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="img1" class="form-label">Logo Navbar
                                        <div class="mb-2 mt-2">
                                            <img src="{{ asset('storage/' . $general->logo_navbar) }}"
                                                alt="{{ $general->logo_navbar }}" id="output-img1"
                                                style="max-height: 200px; max-width: 200px;">
                                        </div>
                                    </label>
                                    <input class="form-control @error('logo_navbar') is-invalid @enderror image-show"
                                        value="{{ $general->logo_navbar }}" name="logo_navbar" type="file"
                                        id="img1" accept="image/*">
                                    @error('logo_navbar')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nav_contact_1" class="form-label">Navbar Contact 1</label>
                                    <textarea type="text" name="nav_contact_1"
                                    class="form-control text-white @error('nav_contact_1') is-invalid @enderror editable" id="desc" rows="5">{{ $general->nav_contact_1 }}</textarea>
                                @error('nav_contact_1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nav_contact_2" class="form-label">Navbar Contact 2</label>
                                    <textarea type="text" name="nav_contact_2"
                                    class="form-control text-white @error('nav_contact_2') is-invalid @enderror editable" id="desc2" rows="5">{{ $general->nav_contact_2 }}</textarea>
                                @error('nav_contact_2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    {{-- <div class="row"> --}}
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Footer</h5>
                                <div class="mb-3">
                                    <label for="img2" class="form-label">Logo Footer
                                        <div class="mb-2 mt-2">
                                            <img src="{{ asset('storage/' . $general->logo_footer) }}"
                                                alt="{{ $general->logo_footer }}" id="output-img2"
                                                style="max-height: 200px; max-width: 200px;">
                                        </div>
                                    </label>
                                    <input class="form-control @error('logo_footer') is-invalid @enderror image-show"
                                        value="{{ $general->logo_footer }}" name="logo_footer" type="file"
                                        id="img2" accept="image/*">
                                    @error('logo_footer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row"> --}}
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">SEO</h5>
                                <div class="mb-3">
                                    <label for="img3" class="form-label">Logo SEO
                                        <div class="mb-2 mt-2">
                                            <img src="{{ asset('storage/' . $general->logo_seo) }}"
                                                alt="{{ $general->logo_seo }}" id="output-img3"
                                                style="max-height: 200px; max-width: 200px;">
                                        </div>
                                    </label>
                                    <input class="form-control @error('logo_seo') is-invalid @enderror image-show"
                                        value="{{ $general->logo_seo }}" name="logo_seo" type="file"
                                        id="img3" accept="image/*">
                                    @error('logo_seo')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name"
                                        name="name" value="{{ $general->name }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea type="description" name="description" class="form-control  @error('description') is-invalid @enderror"
                                        id="description" rows="5" style="color: white">{!! $general->description !!}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row"> --}}
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Social</h5>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="facebook" class="form-label">Facebook</label>
                                                <input type="text" class="form-control" id="facebook"
                                                    name="facebook" value="{{ $general->facebook }}">
                                                @error('facebook')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="instagram" class="form-label">Instagram</label>
                                                <input type="text" class="form-control" id="instagram"
                                                    name="instagram" value="{{ $general->instagram }}">
                                                @error('instagram')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="whatsapp" class="form-label">Whatsapp</label>
                                                <input type="text" class="form-control" id="whatsapp"
                                                    name="whatsapp" value="{{ $general->whatsapp }}">
                                                @error('whatsapp')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tokopedia" class="form-label">Tokopedia</label>
                                                <input type="text" class="form-control" id="tokopedia"
                                                    name="tokopedia" value="{{ $general->tokopedia }}">
                                                @error('tokopedia')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="shopee" class="form-label">Shopee</label>
                                                <input type="text" class="form-control" id="shopee"
                                                    name="shopee" value="{{ $general->shopee }}">
                                                @error('shopee')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    <script>
                        $('.image-show').each(function() {
                            var id;
                            id = $(this).attr('id');
                            if (id != '') {
                                $("#" + id).change(function(event) {
                                    var x = URL.createObjectURL(event.target.files[0]);
                                    $("#output-" + id).attr("src", x);
                                    console.log(event);
                                });
                            }
                        })
                    </script>
                    <script>
                        $(document).ready(function() {
                            var id;
                            $('.editable').each(function() {
                                id = $(this).attr('id');
                                if (id != '') {
                                    $('#' + id).summernote({
                                        height: 120,
                                    });
                                }
                            })
                        });
                    </script>
                    <script>
                        var table = $('#logo-table').DataTable({});

                    </script>
                @endsection
