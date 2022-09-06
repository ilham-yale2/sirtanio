@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('team.create') }}" class="btn btn-primary mb-3">Create</a>
                            <table id="logo-table" class="display" width="100%">
                                <thead>
                                    <tr>
                                        <th>index</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>photo</th>
                                        <th style="text-align: center">option</th>
                                    </tr>
                                </thead>
                                <tbody id="images">
                                    @foreach ($team as $p)
                                        <tr>
                                            <td>{{ $p->index }}</td>
                                            <td>{{ $p->id }}</td>
                                            <td>{{ $p->name }}</td>
                                            <td>{{ $p->position }}</td>
                                            <td>
                                                <img onclick="image()" class="scale-down"
                                                    src="{{ asset('storage/' . $p->photo) }}"
                                                    style="height: 250px; width:200px; object-fit:cover"
                                                    alt="{{ $p->photo }}">
                                            </td>
                                            <td style="text-align: center">
                                                <div class="dropdown dropright">
                                                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item text-dark"
                                                                href="/admin/team/{{ $p->id }}/edit">Edit</a></li>
                                                        <li>
                                                            <form id="form-delete{{ $p->id }}"
                                                                action="{{ route('team.destroy', ['team' => $p->id]) }}"
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
                                        <th>index</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>photo</th>
                                        <th style="text-align: center">option</th>
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
        {{-- <script type="text/javascript" src="{{ asset('js/reorder.js') }}"></script> --}}
        <script>
            var table = $('#logo-table').DataTable({
                rowReorder: true,
                columnDefs: [{
                    targets: [1, 0],
                    visible: false,
                    searchable: false
                }]
            });
        </script>
    @endsection
