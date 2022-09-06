@extends('layout.dashboard')

@section('content')
    {{-- @dd($contact) --}}
    <div class="page-content">
        <div class="main-wrapper">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Title Page</h5>
                            <form method="POST" action="/admin/home/{{ $home->id }}">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="contact_title" class="form-label">Title Page</label>
                                            <textarea type="text" name="contact_title"
                                                class="form-control text-white @error('contact_title') is-invalid @enderror editable" id="desc" rows="5">{{ $home->contact_title }}</textarea>
                                            @error('contact_title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="contact_color" class="form-label">Background Color</label>
                                            <input type="color" value="{{ $home->contact_color }}" name="contact_color"
                                                class="form-control form-control-color @error('contact_color') is-invalid @enderror"
                                                id="contact_color">
                                            @error('contact_color')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Update</button>
                                {{-- <a onclick="whatupdate()" class="btn btn-primary">Edit</a> --}}
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Contact Page</h5>
                                <form action="/admin/contact/{{ $contact->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="maps" class="form-label">Map</label>
                                        <input type="text" class="form-control" id="maps" name="maps"
                                            value="{{ $contact->maps }}">
                                        @error('maps')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <label for="addres" class="form-label">Addres</label>
                                                <input type="text" class="form-control" id="addres" name="addres"
                                                    value="{{ $contact->addres }}">
                                                @error('addres')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="telephone" class="form-label">Telephone</label>
                                                <input type="text" class="form-control" id="telephone" name="telephone"
                                                    value="{{ $contact->telephone }}">
                                                @error('telephone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{ $contact->email }}">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
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
                    @endsection
