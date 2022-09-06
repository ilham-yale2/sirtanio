@extends('layout.dashboard')

@section('content')
<div class="page-content">
    <div class="main-wrapper">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table id="logo-table" class="display" style="table-layout:fixed;
                                width:100%;">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>message</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody id="images">
                                @foreach ($message as $p)

                                    <tr>
                                        <td>{!! $p->name !!}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>{!! substr(strip_tags($p->message) , 0, ) !!}...</td>

                                        <td style="">
                                            <div class="dropdown dropright">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item text-dark"
                                                            href="{{ route('message.show', ['message' => $p->id]) }}">show</a>
                                                    </li>
                                                    <li>
                                                        <form id="form-delete{{ $p->id }}"
                                                            action="{{ route('message.destroy', ['id' => $p->id]) }}"
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
                                    <th>name</th>
                                    <th>email</th>
                                    <th>message</th>
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
        });;
    </script>
@endsection
