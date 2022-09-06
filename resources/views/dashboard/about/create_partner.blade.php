@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Create Image </h5>
                            <form action="{{ route('partner.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control @error('image') is-invalid @enderror"
                                        name="image" type="file" id="image" accept="image/*"
                                        value="{{ old('image') }}">
                                    <img id="out" class="mt-3" style="max-height: 200px; max-width: 300px;">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection

    @section('js')
    <script>
        $(function() {
            $("#image").change(function(event) {
                var x = URL.createObjectURL(event.target.files[0]);
                $("#out").attr("src", x);
                console.log(event);
            });
        });
    </script>
    @endsection
