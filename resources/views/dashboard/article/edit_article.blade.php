@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Article</h5>
                            <form id="form-update" action="{{ route('article.update', ['article' => $article->id]) }}" method="POST" enctype="multipart/form-data">
                                @method('patch')
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-8">
                                        <label for="title" class="form-label">title</label>
                                        <textarea type="text" name="title" class="form-control  @error('title') is-invalid @enderror editable"
                                            id="title" rows="5">{!! $article->title !!}</textarea>
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
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
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
                                    <label for="text-edit" class="form-label">text</label>
                                    <textarea type="text-edit" name="text" class="form-control  @error('text') is-invalid @enderror editable"
                                        id="text" rows="5">{!! $article->text !!}</textarea>
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
                                                name="seo_title" type="text" id="seo_title" value="{{ $article->seo_title }}">
                                            @error('seo_title')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="seo_description" class="form-label">Seo Description</label>
                                            <textarea type="seo_description" name="seo_description" class="form-control  @error('seo_description') is-invalid @enderror"
                                                id="seo_description" rows="5" style="color: white">{{ $article->seo_description }}</textarea>
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
                                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ asset('storage/' . $article->image) }}" id="output-image"
                                                style="max-height: 200px; max-width: 200px;">
                                        </div>
                                        <input class="form-control @error('image') is-invalid @enderror image-show"
                                            name="image" type="file" id="image" accept="image/*">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
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
