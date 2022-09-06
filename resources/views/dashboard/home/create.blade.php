@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Create Slider</h5>
                            <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="title" class="form-label is-invalid">Title</label>
                                            <textarea type="text" name="title"
                                            class="form-control text-white @error('title') is-invalid @enderror editable" id="desc" rows="5">{{ old('title') }}</textarea>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                            {{-- <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror" id="title"
                                                aria-describedby="title" value="{{ old('title') }}">
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror --}}
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="filePhoto" class="form-label">Background Image
                                            </label>
                                            <input class="form-control @error('bg_img') is-invalid @enderror" name="bg_img"
                                                type="file" id="filePhoto" accept="image/*" value="{{ old('bg_img') }}">
                                            <img id="output" class="mt-3" style="max-height: 200px; max-width: 300px;">
                                            @error('bg_img')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3">
                                        <label for="sub_title" class="form-label is-invalid">Sub Title</label>
                                        <textarea type="text" name="sub_title"
                                            class="form-control text-white @error('sub_title') is-invalid @enderror editable" id="desc2" rows="5">{{ old('sub_title') }}</textarea>
                                        @error('sub_title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script>
            $(function() {
                $("#filePhoto").change(function(event) {
                    var x = URL.createObjectURL(event.target.files[0]);
                    $("#output").attr("src", x);
                    console.log(event);
                });
            });

            $(function() {
                $("#photo").change(function(event) {
                    var x = URL.createObjectURL(event.target.files[0]);
                    $("#out").attr("src", x);
                    console.log(event);
                });
            });
        </script>
    @endsection

    @section('js')
        <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
        <script>
            function hilzam() {
                if ($('#featured').prop('checked') == true) {
                    $('.layout').show();
                } else {
                    $('.layout').hide();
                }
            };
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
