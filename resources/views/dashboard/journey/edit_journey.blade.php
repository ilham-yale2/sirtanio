@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Journey</h5>
                            <form id="form-update" action="{{ route('journey.update', ['journey' => $journey->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="year" class="form-label">Year</label>

                                    <input class="form-control @error('year') is-invalid @enderror" name="year"
                                        type="text" id="year" value="{{ $journey->year }}">
                                    @error('year')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea type="body" name="body" class="form-control  @error('body') is-invalid @enderror editable"
                                        id="body" rows="5">{!! $journey->body !!}</textarea>
                                    @error('body')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
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
                    </script>
                @endsection
