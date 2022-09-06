@extends('layout.dashboard')

@section('content')
<div class="page-content">
    <div class="main-wrapper">

        <div class="row">
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
                                            <label for="article_title" class="form-label">Title Page</label>
                                            <textarea type="text" name="article_title" class="form-control  @error('article_title') is-invalid @enderror editable"
                                                id="article_title" rows="5">{!! $home->article_title !!}</textarea>
                                            @error('article_title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="article_color" class="form-label">Background Color</label>
                                            <input type="color" value="{{ $home->article_color }}" name="article_color" class="form-control form-control-color @error('article_color') is-invalid @enderror"
                                                id="article_color" >
                                            @error('article_color')
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
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Article</h5>
                        <a href="{{ route('article.create') }}" class="btn btn-primary mb-3">Create</a>
                        <table id="logo-table" class="display" style="table-layout:fixed;
                                width:100%;">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    {{-- <th>Author</th> --}}
                                    <th>Categories</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody id="images">
                                @foreach ($article as $p)

                                    <tr>
                                        <td>{!! $p->title !!}</td>
                                        {{-- <td>{{ $p->user }} </td> --}}
                                        <td>{{ $p->category->name }}</td>

                                        <td style="">
                                            <div class="dropdown dropright">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item text-dark"
                                                            href="{{ route('article.edit', ['article' => $p->id]) }}">Edit</a>
                                                    </li>
                                                    <li>
                                                        <form id="form-delete{{ $p->id }}"
                                                            action="{{ route('article.destroy', ['article' => $p->id]) }}"
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
                                    {{-- <th>Author</th> --}}
                                    <th>Categories</th>
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
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        var table = $('#logo-table').DataTable({
        });

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
@endsection
