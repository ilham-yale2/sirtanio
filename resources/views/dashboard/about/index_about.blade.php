@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
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
                                            <label for="about_title" class="form-label">Title Page</label>
                                            <textarea type="text" name="about_title" class="form-control  @error('about_title') is-invalid @enderror editable"
                                                id="about_title" rows="5">{!! $home->about_title !!}</textarea>
                                            @error('about_title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="about_color" class="form-label">Background Color</label>
                                            <input type="color" value="{{ $home->about_color }}" name="about_color" class="form-control form-control-color @error('about_color') is-invalid @enderror"
                                                id="about_color" >
                                            @error('about_color')
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
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">About</h5>
                                  <form id="form-update" action="{{ route('about.update', ['about' => $about->id]) }}" method="POST" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                <div class="mb-3">
                                    <label for="about_title" class="form-label">About Title</label>
                                    <textarea type="text" name="about_title" class="form-control  @error('about_title') is-invalid @enderror editable"
                                        id="about_title" rows="5">{!! $about->about_title !!}</textarea>
                                    @error('about_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="about_text" class="form-label">About Text</label>
                                    <textarea type="text" name="about_text" class="form-control  @error('about_text') is-invalid @enderror editable"
                                        id="about_text" rows="5">{!! $about->about_text !!}</textarea>
                                    @error('about_text')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="value_title" class="form-label">Value Title</label>
                                    <textarea type="text" name="value_title" class="form-control  @error('value_title') is-invalid @enderror editable"
                                        id="value_title" rows="5">{!! $about->value_title !!}</textarea>
                                    @error('value_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <input class="form-control @error('value_title') is-invalid @enderror" name="value_title"
                                        type="text" id="value_title" value="{{ $about->value_title }}">
                                    @error('value_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                                </div>
                                <div class="mb-3">
                                    <label for="value_text" class="form-label">Value Text</label>
                                    <textarea type="text" name="value_text" class="form-control  @error('value_text') is-invalid @enderror editable"
                                        id="value_text" rows="5">{!! $about->value_text !!}</textarea>
                                    @error('value_text')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="vision_title" class="form-label">Vision Title</label>
                                    <textarea type="text" name="vision_title" class="form-control  @error('vision_title') is-invalid @enderror editable"
                                    id="vision_title" rows="5">{!! $about->vision_title !!}</textarea>
                                @error('vision_title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                    {{-- <input class="form-control @error('vision_title') is-invalid @enderror" name="vision_title"
                                        type="text" id="vision_title" value="{{ $about->vision_title }}">
                                    @error('vision_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                                </div>
                                <div class="mb-3">
                                    <label for="vision_text" class="form-label">Vision Text</label>
                                    <textarea type="text" name="vision_text" class="form-control  @error('vision_text') is-invalid @enderror editable"
                                        id="vision_text" rows="5">{!! $about->vision_text !!}</textarea>
                                    @error('vision_text')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="certificate_title" class="form-label">Certificate Title</label>
                                    <textarea type="text" name="certificate_title" class="form-control  @error('certificate_title') is-invalid @enderror editable"
                                        id="certificate_title" rows="5">{!! $about->certificate_title !!}</textarea>
                                    @error('certificate_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <input class="form-control @error('certificate_title') is-invalid @enderror" name="certificate_title"
                                        type="text" id="certificate_title" value="{{ $about->certificate_title }}">
                                    @error('certificate_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                                </div>
                                <div class="mb-3">
                                    <label for="certificate_text" class="form-label">Certificate Text</label>
                                    <textarea type="text" name="certificate_text" class="form-control  @error('certificate_text') is-invalid @enderror editable"
                                        id="certificate_text" rows="5">{!! $about->certificate_text !!}</textarea>
                                    @error('certificate_text')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="certificate_img" class="form-label">Certificate Image
                                    </label>
                                    <div>
                                        <img src="{{ asset('storage/' . $about->certificate_img) }}" alt="" id="output-image"
                                            style="max-height: 200px; max-width: 200px;">
                                    </div>
                                    <input class="form-control @error('certificate_img') is-invalid @enderror image-show"
                                        name="certificate_img" type="file" id="image" accept="image/*">
                                    @error('certificate_img')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <a onclick="whatupdate()" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
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

                        $(function() {
                            $("#videoFile").change(function(event) {
                                var x = URL.createObjectURL(event.target.files[0]);
                                $("#vid-output").show();
                                $("#vid-output").attr("src", x);
                                console.log(event);
                            });
                        });

                        $('.image-show').each(function() {
                            var id;
                            id = $(this).attr('id');
                            if (id != '') {
                                $("#" + id).change(function(event) {
                                    var x = URL.createObjectURL(event.target.files[0]);
                                    $("#output-" + id).attr("src", x);
                                    $("#output-" + id).addClass("mb-2 mt-2");
                                    console.log(event);
                                });
                            }
                        })
                    </script>
                @endsection
