@extends('layout.dashboard')

@section('content')
    {{-- @dd($home) --}}
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Promotion</h5>
                            @if (Session::has('message'))
                                <div class="col-md-7 mx-auto">
                                    <div class="alert alert-{{Session::get('message')['status']}} alert-dismissible fade show" role="alert">
                                        <p class="mb-0">{{Session::get('message')['text']}}</p>
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-12">
                                <h6 class="text-white">
                                    Add new slide
                                </h6>
                            </div>
                            <form action="{{route('promotion.store')}}" method="POST" class="mb-5 row" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-6 ">
                                    <label for="image" class="mb-2">Image</label>
                                    <input type="file" name="image" id="image" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Preview</label>
                                    <img src="" id="preview" alt="" class="w-100">
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary mt-3" type="submit">save</button>
                                </div>
                            </form>
                            <table id="dataTable" class="display" style="table-layout:fixed; width:100%;">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>

                                            <td>
                                                <img src="{{asset('storage/'.$item->source)}}" alt="" width="300">
                                            </td>
                                            <td>
                                                <form id="form-delete{{ $item->id }}"
                                                    action="{{route('promotion.destroy', ['promotion' => $item->id])}}"
                                                    method="post" style="display: none">
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="deletePromotion({{ $item->id }})">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <h6 class="text-white mt-5">
                                Video
                            </h6>
                            <form action="{{route('promotion.update', ['promotion' => $video->id ?? 0])}}" method="POST" >
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Link Video</label>
                                            <input type="text" value="{{$video->source ?? '' }}" class="form-control" id="inputLink" name="link">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Preview</label>
                                            <iframe id="previewLink" class="w-100" height="400" src="{{$video->source ?? ''}}" title="Sirtanio Organik Indonesia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button class="btn btn-primary">save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                            function deletePromotion(id){
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
                            $("#image").change(function(event) {
                                    var x = URL.createObjectURL(event.target.files[0]);
                                    $("#preview").attr("src", x);
                                    console.log(event);
                            });

                            $('#inputLink').on('keyup',function(){
                                var value = $(this).val()
                                console.log(value);
                                $('#previewLink').attr('src', value)
                            })
                        </script>
                    @endsection
