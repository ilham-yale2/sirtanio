@extends('layout.dashboard')

@section('content')
    {{-- @dd($home) --}}
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Home Slider</h5>
                            <a href="/admin/slider" class="btn btn-primary mb-3">Add New Slide</a>
                            <table id="logo-table" class="display" style="table-layout:fixed; width:100%;">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>Image</th>
                                        <th>option</th>
                                    </tr>
                                </thead>
                                <tbody id="images">
                                    @foreach ($slider as $id => $p)
                                        <tr>
                                            <td>{{ substr(strip_tags($p->title), 0, 40) }}....</td>

                                            <td> {{ substr(strip_tags($p->sub_title), 0, 40) }}....</td>
                                            <td>
                                                <img onclick="image()" src="{{ asset('storage/' . $p->bg_img) }}"
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
                                                                href="/admin/slider/{{ $p->id }}/edit">Edit</a>
                                                        </li>
                                                        <li>
                                                            <form id="form-delete{{ $id }}"
                                                                action="/admin/slider/delete/{{ $p->id }}"
                                                                method="post" style="display: none">
                                                                @method('delete')
                                                                @csrf
                                                            </form>
                                                            <a class="dropdown-item text-dark" href="#"
                                                                onclick="what({{ $id }})">Delete</a>
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
                                        <th>Sub Title</th>
                                        <th>Image</th>
                                        <th>option</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Popup</h5>
                            <form action="/admin/home/{{ $home->id }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="filePhoto" class="form-label">Popup Image
                                            </label>
                                            <input class="form-control @error('popup_img') is-invalid @enderror" name="popup_img"
                                                type="file" id="filePhoto" accept="image/*" value="{{ old('popup_img') }}">
                                            @error('popup_img')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 col-4 link">
                                        <label for="link" class="form-label is-invalid">Link Popup</label>
                                        <select class="form-select" id="link" name="link" aria-label="Default select example">
                                            {{-- <option selected>Open this select menu</option> --}}
                                            <option value="">{{ $home->link }}</option>
                                            <option value="/" {{ $home->link == "/" ? 'selected' : '' }}>Home</option>
                                            <option value="/about" {{ $home->link == "/about" ? 'selected' : '' }}>About Us</option>
                                            <option value="/products" {{ $home->link == "/products" ? 'selected' : '' }}>products</option>
                                            <option value="/opportunity" {{ $home->link == "/opportunity" ? 'selected' : '' }}>Opportunity</option>
                                            <option value="/contact" {{ $home->link == "/contact" ? 'selected' : '' }}>Contact Us</option>
                                            <option value="/article" {{ $home->link == "/article" ? 'selected' : '' }}>Article</option>
                                        </select>
                                        @error('link')
                                            <div class="invalid-feedback">
                                                silahkan pilih link
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-4 link-custom" style="display: none">
                                        <div class="mb-3">
                                            <label for="link" class="form-label">Custom Link</label>
                                            <input type="text" name="link" min="1"
                                                class="form-control @error('link') is-invalid @enderror"
                                                id="link-custom" value="{{ $home->link }}">
                                            @error('link')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <img id="output" src="{{ asset('storage/' . $home->popup_img) }}" class="mt-3" style="max-height: 200px; max-width: 300px;">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <div class="form-check pt-2" onclick="hilzam()">
                                            <input type="checkbox" class="form-check-input" name="custom"
                                                id="custom">
                                            <label class="form-check-label" for="custom">custom link</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Section 1</h5>
                            <form action="/admin/home/{{ $home->id }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf

                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <textarea type="text" name="title"
                                    class="form-control text-white @error('title') is-invalid @enderror editable" id="desc" rows="5">{{ $home->title }}</textarea>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="sub_title" class="form-label is-invalid">Sub Title</label>
                                    <textarea type="text" name="sub_title"
                                        class="form-control text-white @error('sub_title') is-invalid @enderror editable" id="desc2" rows="5">{{ $home->sub_title }}</textarea>
                                    @error('sub_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Section 2</h5>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label is-invalid">Deskripsi</label>
                                            <button type="button" class="btn btn-primary" onclick="edit('summernote-1')">Edit</button>
                                            <button type="button" class="btn btn-primary" onclick="save('summernote-1')">save</button>
                                            <div class="w-100 summernote" id="summernote-1" data-target="desc3">
                                                {!! $home->deskripsi !!}
                                            </div>
                                            <textarea type="text" name="deskripsi"
                                                class="form-control text-white @error('deskripsi') is-invalid @enderror editable" id="desc3" rows="5">{{ $home->deskripsi }}</textarea>
                                            @error('deskripsi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="farmer" class="form-label">Farmer Partner</label>
                                                    <input type="number" name="farmer" min="1"
                                                        class="form-control @error('farmer') is-invalid @enderror"
                                                        id="farmer" value="{{ $home->farmer }}">
                                                    @error('farmer')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="land" class="form-label">Organic Land Area
                                                        (ha)</label>
                                                    <input type="number" name="land" min="1"
                                                        class="form-control @error('land') is-invalid @enderror"
                                                        id="land" value="{{ $home->land }}">
                                                    @error('land')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>



                                        <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endsection
                    @section('js')
                        <script>
                            $('.summernote').on('change', function(){
                                 var t = $(this).data('target');
                                // $(`#${t}`).html($(this)find('note-editable').html())
                                console.log(t);
                            })
                            function hilzam() {
                                if ($('#custom').prop('checked') == true) {
                                    $('.link').hide();
                                    $('.link-custom').show();
                                    $("#link-custom").prop('enabled', true);
                                } else {
                                    $('.link-custom').hide();
                                    $("#link-custom").prop('disabled', true);
                                    $('.link').show();
                                }
                            };
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
                            function edit(target){
                                $(`#${target}`).summernote({focus: true})
                                console.log('target');
                            }
                            // $('.editable').each(function(i, obj) { $(obj).summernote({
                            //     onblur: function(e) {
                            //         var id = $(obj).data('id');
                            //         var sHTML = $(obj).code();
                            //         alert(sHTML);
                            //         }
                            //     });
                            // });
                            $(function() {
                                $("#filePhoto").change(function(event) {
                                    var x = URL.createObjectURL(event.target.files[0]);
                                    $("#output").attr("src", x);
                                    console.log(event);
                                });
                            });
                            $('.image-show').each(function() {
                                var id;
                                id = $(this).attr('id');
                                if (id != '') {
                                    $("#" + id).change(function(event) {
                                        var x = URL.createObjectURL(event.target.files[0]);
                                        $("#output-" + id).attr("src", x);
                                        console.log(event);
                                    });
                                }
                            })

                            $(function() {
                                $("#videoFile").change(function(event) {
                                    var x = URL.createObjectURL(event.target.files[0]);
                                    $("#vid-output").show();
                                    $("#vid-output").attr("src", x);
                                    console.log(event);
                                });
                            });
                        </script>
                        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
                        <script>
                            var table = $('#logo-table').DataTable({});
                        </script>
                    @endsection
