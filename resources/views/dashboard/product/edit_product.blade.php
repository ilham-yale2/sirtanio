@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Product</h5>
                            <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="filePhoto" class="form-label">Product Image
                                            </label>
                                            <input class="form-control @error('product_image') is-invalid @enderror"
                                                name="product_image" type="file" id="filePhoto" accept="image/*"
                                                value="{{ old('product_image') }}">
                                            <img id="output" class="mt-3"
                                                style="max-height: 200px; max-width: 300px;" src="{{ asset('storage/' . $product->product_image) }}">
                                            @error('product_image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="product_title" class="form-label is-invalid">Title</label>
                                                <input type="text" name="product_title"
                                                    class="form-control @error('product_title') is-invalid @enderror" id="product_title"
                                                    aria-describedby="product_title" value="{{$product->product_title }}">
                                                @error('product_title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
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
