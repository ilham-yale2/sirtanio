@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Product</h5>
                            <form action="{{ route('team.update', ['team' => $team->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="filePhoto" class="form-label">Photo
                                    </label>
                                    <input class="form-control @error('photo') is-invalid @enderror" name="photo"
                                        type="file" id="filePhoto" accept="image/*" value="{{ $team->photo }}">
                                    <img id="output" class="mt-3" style="max-height: 200px; max-width: 300px;"
                                        src="{{ asset('storage/' . $team->photo) }}">
                                    @error('photo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="name" class="form-label is-invalid">Name</label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                id="name" aria-describedby="name"
                                                value="{{ $team->name }}">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="position" class="form-label is-invalid">Title</label>
                                            <input type="text" name="position"
                                                class="form-control @error('position') is-invalid @enderror" id="position"
                                                aria-describedby="position" value="{{ $team->position }}">
                                            @error('position')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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
