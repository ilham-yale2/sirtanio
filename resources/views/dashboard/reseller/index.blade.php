@extends('layout.dashboard')

@section('content')
    {{-- @dd($home) --}}
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Reseller</h5>
                            @if (Session::has('message'))
                                <div class="col-md-7 mx-auto">
                                    <div class="alert alert-{{Session::get('message')['status']}} alert-dismissible fade show" role="alert">
                                        <p class="mb-0">{{Session::get('message')['text']}}</p>
                                    </div>
                                </div>
                            @endif
                            <a href="{{route('export-reseller')}}" target="_blank" class="btn btn-success mb-3">Download Excel</a>
                            <table id="dataTable" class="display" style="table-layout:fixed; width:100%;">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Nomor Telephone</th>
                                        <th>Alamat Pengiriman</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($resellers as $item)
                                        <tr>
                                            <td>{{$item->full_name}}</td>

                                            <td> {{ $item->phone_number }}</td>
                                            <td>
                                                {{$item->shipping_address}}
                                            </td>
                                            <td>
                                                <div class="dropdown dropright">
                                                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item text-dark"
                                                                href="{{ route('reseller.show', ['reseller' => $item->id]) }}">Edit</a>
                                                        </li>
                                                        <li>
                                                            <form id="form-delete{{ $item->id }}"
                                                                action="{{route('reseller.destroy', ['reseller' => $item->id])}}"
                                                                method="post" style="display: none">
                                                                @method('delete')
                                                                @csrf
                                                            </form>
                                                            <a class="dropdown-item text-dark" href="#"
                                                                onclick="deleteReseller({{ $item->id }})">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Nomor Telephone</th>
                                        <th>Alamat Pengiriman</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    @endsection
                    @section('js')
                        <script>
                           
                        </script>
                        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
                        <script>
                            var table = $('#dataTable').DataTable({});
                            function deleteReseller(id){
                                Swal.fire({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    $(`#form-delete${id}`).submit()
                                }
                                })
                            }
                        </script>
                    @endsection
