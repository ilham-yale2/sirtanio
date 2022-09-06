@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit benefit</h5>
                            <form action="{{ route('benefit.update', ['benefit' => $benefit->id]) }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="icon" class="form-label">Icon
                                    </label>
                                    <input class="form-control @error('icon') is-invalid @enderror"
                                        name="icon" type="text" id="icon" value="{{ $benefit->icon }}">
                                    @error('icon')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="description" class="form-label is-invalid">Description</label>
                                        <textarea type="text" name="description"
                                        class="form-control text-white @error('description') is-invalid @enderror "
                                        id="desc" rows="5">{{ $benefit->description }}</textarea>
                                        @error('description')
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
    @endsection

