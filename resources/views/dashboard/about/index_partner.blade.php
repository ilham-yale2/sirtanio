@extends('layout.dashboard')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('partner.create') }}" class="btn btn-primary mb-3">Create</a>
                            <table id="logo-table" class="display"
                                style="table-layout:fixed;
                            width:100%;">
                                <thead>
                                    <tr>
                                        <th>position</th>
                                        <th>Id</th>
                                        <th>Logo</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody id="images">
                                    {{-- @dd($op) --}}
                                    @foreach ($partner as $p)
                                        <tr>
                                            <td>
                                                {{ $p->index }}
                                            </td>
                                            <td>
                                                {{ $p->id }}
                                            </td>
                                            <td>
                                                <img onclick="image()" src="{{ asset('storage/' . $p->image) }}"
                                                style="height: 100px; width:200px; object-fit:cover">
                                            </td>


                                            <td style="">
                                                <div class="dropdown dropright">
                                                    <form id="form-delete{{ $p->id }}"
                                                        action="{{ route('partner.destroy', ['partner' => $p->id]) }}"
                                                        method="post" style="display: none">
                                                        @method('delete')
                                                        @csrf
                                                    </form>
                                                    <a class="btn btn-danger" onclick="what({{ $p->id }})">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>position</th>
                                        <th>Id</th>
                                        <th>Logo</th>
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
        <script>
            var table = $('#logo-table').DataTable({
                rowReorder: true,
                columnDefs: [{
                    targets: [1],
                    visible: false,
                    searchable: false
                }]
            });

            table.on('row-reordered', function(e, diff, edit) {
                setTimeout(() => {
                    var obj_id = table.column(1).data().toArray();
                    console.log(obj_id);
                    $.ajax({
                        type: "post",
                        url: "{{ url('') }}/admin/partner/position",
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
