@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Section 1</h5>
                            <form action="/admin/home/{{ $home->id }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="benefit_title" class="form-label">Benefit Title</label>
                                    <textarea type="text" name="benefit_title"
                                        class="form-control text-white @error('benefit_title') is-invalid @enderror editable" id="desc"
                                        rows="5">{{ $home->benefit_title }}
                                    </textarea>
                                    @error('benefit_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Section 2</h5>
                                <a href="{{ route('benefit.create') }}" class="btn btn-primary mb-3">Create</a>


                                <table id="logo-table" class="display"
                                    style="table-layout:fixed;
                                width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Icon</th>
                                            <th>description</th>
                                            <th>option</th>
                                        </tr>
                                    </thead>
                                    <tbody id="images">
                                        @foreach ($benefit as $p)
                                            <tr>
                                                <td>
                                                    {!! $p->icon !!}
                                                </td>
                                                <td>{!! $p->description !!}</td>
                                                <td style="">
                                                    <div class="dropdown dropright">
                                                        <button class="btn btn-secondary" type="button"
                                                            id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </button>
                                                        <ul class="dropdown-menu bg-light"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <li><a class="dropdown-item text-dark"
                                                                    href="{{ route('benefit.edit', ['benefit' => $p->id]) }}">Edit</a>
                                                            </li>
                                                            <li>
                                                                <form id="form-delete{{ $p->id }}"
                                                                    action="{{ route('benefit.destroy', ['benefit' => $p->id]) }}"
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
                                            <th>Icon</th>
                                            <th>description</th>
                                            <th>option</th>
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
            <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#desc').summernote({
                        height: 120,
                    });
                });
                var table = $('#logo-table').DataTable({});

                table.on('row-reordered', function(e, diff, edit) {
                    setTimeout(() => {
                        var obj_id = table.column(1).data().toArray();
                        console.log(obj_id);
                        $.ajax({
                            type: "post",
                            url: "{{ url('') }}/admin/project/position",
                            dataType: "json",
                            data: {
                                id: obj_id,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                console.log(response);
                            }
                        });
                    }, 2000);
                });
            </script>
        @endsection
