@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Article</h5>
                            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-8">
                                        <label for="title" class="form-label">title</label>
                                        <textarea type="text" name="title" class="form-control  @error('title') is-invalid @enderror editable"
                                            id="title" rows="5">{{ old('title') }}</textarea>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label for="category" class="form-label is-invalid">Category</label>
                                        <select class="form-select" id="category" name="category_id" aria-label="Default select example">
                                            {{-- <option selected>Open this select menu</option> --}}
                                            <option value="">Silahkan Pilih Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <div class="invalid-feedback">
                                                silahkan pilih category
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="text" class="form-label">text</label>
                                    <textarea type="text" name="text" class="form-control  @error('text') is-invalid @enderror editable"
                                        id="text" rows="5">{{ old('text') }}</textarea>
                                    @error('text')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="seo_title" class="form-label">Seo Title</label>
                                            <input class="form-control @error('seo_title') is-invalid @enderror seo_title-show"
                                                name="seo_title" type="text" id="seo_title" value="{{ old('seo_title') }}">
                                            @error('seo_title')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="seo_description" class="form-label">Seo Description</label>
                                            <textarea type="seo_description" name="seo_description" class="form-control  @error('seo_description') is-invalid @enderror"
                                                id="seo_description" rows="5" style="color: white">{{ old('seo_description') }}</textarea>
                                            @error('seo_description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="image" class="form-label">image</label>
                                        <div>
                                            <img src="" alt="" id="output-image"
                                                style="max-height: 200px; max-width: 200px; display:none;">
                                        </div>
                                        <input class="form-control @error('image') is-invalid @enderror image-show"
                                            name="image" type="file" id="image" accept="image/*">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
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

                        $('.image-show').each(function() {
                            var id;
                            id = $(this).attr('id');
                            if (id != '') {
                                $("#" + id).change(function(event) {
                                    var x = URL.createObjectURL(event.target.files[0]);
                                    $("#output-" + id).show();
                                    $("#output-" + id).attr("src", x);
                                    $("#output-" + id).addClass("mb-2 mt-2");
                                    console.log(event);
                                });
                            }
                        })
                    </script>
                @endsection
