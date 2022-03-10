@extends('admin.layouts.app')
@section('title',' Edit Service')
@section('content')
 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Edit Service</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Edit Service</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create Service</h4>
                    </div>
                    <form method="POST" action="{{ route('service.update', $single_service->id ) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Service Name</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="name" name="service_title" value="{{ $single_service->service_title }}" required>
                                        @error('service_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Price For Verified Account </label>
                                        <input type="number" class="form-control" id="field-2" placeholder="price tk" name="discount" value="{{ $single_service->discount }}" required>
                                        @error('discount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Price For Non-Verified Account </label>
                                        <input type="number" class="form-control" id="field-2" placeholder="price tk" name="service_price" value="{{ $single_service->service_price }}" required>
                                        @error('service_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="field-1" class="control-label">Image <span class="text-light"> &nbsp;(Preferable width : 200px Height: 200px)</span></label><br>
                                    <img class="my-2" height="100px" src="{{ asset('assets/img') }}/{{ $single_service->image }}" alt="img">
                                    <br>
                                    <button type="button" class="btn btn-secondary btn-file">
                                        <input type="file" class="btn-secondary" name="image" />
                                    </button><br>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mt-4">
                                    <label for="field-1" class="control-label">Add Service Option</label><br>
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label for="">Services </label>
                                                <ul>
                                                    @foreach ($single_service->serviceitems as $item)
                                                        <li>{{ $item->service_item }}</li>
                                                    @endforeach
                                                </ul>
                                                <button style="cursor: pointer;" class="btn btn-primary pt-2 pb-2" type="button" id="more_fields" onclick="add_fields()">Add more service option <i class="fas fa-plus-circle"></i> </button>
                                                <div id="room_fileds">
                                                    <div>
                                                        <div class="content mt-4">
                                                            <div class="col-12 p-0 mt-4">
                                                                <input type="text" class="form-control" id="inputEmail3" placeholder="add service option 1" value="" name="items[]">
                                                                @error('items[]')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12 p-0 mt-4">
                                                                <input type="text" class="form-control" id="inputEmail3" placeholder="add service option 2" value="" name="items[]">
                                                                @error('items[]')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12 p-0 mt-4">
                                                                <input type="text" class="form-control" id="inputEmail3" placeholder="add service option 3" value="" name="items[]">
                                                                @error('items[]')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    var room = 3;
                                                    function add_fields() {
                                                        room++;
                                                        var objTo = document.getElementById('room_fileds')
                                                        var divtest = document.createElement("div");
                                                        divtest.innerHTML = '<div class=""></div><div class="content mt-3"> <input type="text" class="form-control" style="width:100%;" placeholder="add service option ' + room +'" name="items[]" value="" /> </div>';
                                                        
                                                        objTo.appendChild(divtest)
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Add Service Note</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="service note" name="service_note" value="{{ $single_service->service_note }}" required>
                                        @error('service_note')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('service.index') }}" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save Now</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('footer_script')
    <script>
        jQuery(document).ready(function(){
            $('.summernote').summernote({
                height: 250,              // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });
            $('.inline-editor').summernote({
                airMode: true
            });
        });
    </script>
@endsection

