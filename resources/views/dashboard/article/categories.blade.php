@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('categories.store') }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <input class="form-control @error('name') is-invalid @enderror col-3" name="name"
                                            type="text" id="name">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-1">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </form>
                            <table id="logo-table" class="display"
                                style="table-layout:fixed;
                                width:100%;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $p)
                                        <tr>
                                            <td>{{ $p->name }}</td>
                                            <td class="d-flex">
                                                <div class="mr-3">
                                                    <form id="form-update"
                                                        div
                                                        action="{{ route('categories.update', ['id' => $p->id]) }}"
                                                        method="post">
                                                        @method('put')
                                                        @csrf
                                                        <input class="form-control @error('category') is-invalid @enderror mr-3"
                                                            name="category" type="text" id="category" style="margin-right: 30px">
                                                            @error('category')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                    </form>
                                                </div>
                                                <a class="badge bg-warning text-white" onclick="whatupdate()" ><i
                                                        data-feather="edit"></i></a>
                                                <form id="form-delete{{ $p->id }}"
                                                    action="{{ route('categories.destroy', ['id' => $p->id]) }}"
                                                    method="post" style="display: none">
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                                <a class="badge bg-danger text-white" href="#"
                                                    onclick="what({{ $p->id }})"><i data-feather="trash-2"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Option</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('js')
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <script>
            var table = $('#logo-table').DataTable({});
        </script>
    @endsection
