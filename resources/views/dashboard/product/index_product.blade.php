@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            {{-- <div class="row"> --}}
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Title Page</h5>
                            <form method="POST" action="/admin/home/{{ $home->id }}">
                                @method('put')
                                @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="product_title" class="form-label">Title Page</label>
                                                <textarea type="text" name="product_title"
                                                class="form-control text-white @error('product_title') is-invalid @enderror editable" id="desc" rows="5">{{ $home->product_title }}</textarea>
                                            @error('product_title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="product_color" class="form-label">Background Color</label>
                                                <input type="color" value="{{ $home->product_color }}" name="product_color" class="form-control form-control-color @error('product_color') is-invalid @enderror"
                                                    id="product_color" >
                                                @error('product_color')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                                    {{-- <a onclick="whatupdate()" class="btn btn-primary">Edit</a> --}}
                                    </form>
                        </div>
                    </div>
                </div>
                {{-- <di/v class="row"> --}}
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Product</h5>
                            <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Create</a>
                            <table id="logo-table" class="display"
                                style="table-layout:fixed;
                                width:100%;">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Icon</th>
                                        <th>option</th>
                                    </tr>
                                </thead>
                                <tbody id="images">
                                    @foreach ($product as $p)
                                        <tr>
                                            <td>{!! $p->product_title !!}</td>

                                            <td>
                                                <img onclick="image()" src="{{ asset('storage/' . $p->product_image) }}"
                                                    style="height: 100px; width:200px; object-fit:cover">
                                            </td>
                                            <td style="">
                                                <div class="dropdown dropright">
                                                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item text-dark"
                                                                href="{{ route('product.edit', ['product' => $p->id]) }}">Edit</a>
                                                        </li>
                                                        <li>
                                                            <form id="form-delete{{ $p->id }}"
                                                                action="{{ route('product.destroy', ['product' => $p->id]) }}"
                                                                method="post" style="display: none">
                                                                @method('delete')
                                                                @csrf
                                                            </form>
                                                            <a class="dropdown-item text-dark" href="#"
                                                                onclick="what({{ $p->id }})">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Icon</th>
                                        <th>option</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </di>
        </div>
    @endsection
    @section('js')
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
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
        <script>
            var table = $('#logo-table').DataTable({});

        </script>

    @endsection
