@extends('layout.dashboard')

@section('content')
{{-- @dd($slider) --}}
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Reseller</h5>
                            <form action="{{route('reseller.update', ['reseller' => $reseller->id])}}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="full_name" class="form-label is-invalid">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="full_name" value="{{$reseller->full_name}}">
                                            @error('full_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="phone_number" class="form-label"> Nomor Telepon</label>
                                            <input class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{$reseller->phone_number}}" type="text" >
                                            @error('phone_number')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="shipping_address" class="form-label is-invalid">Alamat Pengiriman</label>
                                        <textarea type="text" name="shipping_address" class="form-control text-white @error('shipping_address') is-invalid @enderror editable"
                                        id="desc2" rows="5">{{ $reseller->shipping_address }}</textarea>
                                        @error('shipping_address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('reseller.index')}}" class="btn btn-secondary">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

    