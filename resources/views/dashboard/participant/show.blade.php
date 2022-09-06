@extends('layout.dashboard')

@section('content')
{{-- @dd($slider) --}}
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Show Participant</h5>
                            <form action="{{route('participant.update', ['participant' => $participant->id])}}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="full_name" class="form-label is-invalid">Nama Lengkap</label>
                                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{$participant->full_name}}">
                                            @error('full_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phone_number" class="form-label"> Nomor Telepon</label>
                                            <input class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{$participant->phone_number}}" type="text" >
                                            @error('phone_number')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="age" class="form-label">Usia</label>
                                            <input class="form-control @error('age') is-invalid @enderror" name="age" value="{{$participant->age}}" type="text" >
                                            @error('age')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="profession" class="form-label"> Pekerjaan</label>
                                            <input class="form-control @error('profession') is-invalid @enderror" name="profession" value="{{$participant->profession}}" type="text" >
                                            @error('profession')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="instagram" class="form-label"> Instagram</label>
                                            <input class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{$participant->instagram}}" type="text" >
                                            @error('instagram')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="reason" class="form-label is-invalid">Kenapa kami Harus memilih anda?</label>
                                            <textarea type="text" name="reason" class="form-control text-white @error('reason') is-invalid @enderror editable"
                                            id="desc2" rows="5">{{ $participant->reason }}</textarea>
                                            @error('reason')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="shipping_address" class="form-label is-invalid">Alamat Pengiriman</label>
                                            <textarea type="text" name="shipping_address" class="form-control text-white @error('shipping_address') is-invalid @enderror editable"
                                            id="desc2" rows="5">{{ $participant->shipping_address }}</textarea>
                                            @error('shipping_address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('participant.index')}}" class="btn btn-secondary">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

    