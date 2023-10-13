@extends('admin.layout.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Room Infor</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Room Infor</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Room Infor</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
                            <form role="form" action="{{ route('admin.room.store') }}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input name="name" type="text" value="{{ old('name') }}"
                                            class="form-control" id="name" placeholder="Enter name">
                                        {{-- loi tu truyen qa ben day --}}
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>




                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input name="price" type="text" value="{{ old('price') }}" class="form-control" id="price" placeholder="Enter Price">
                                        {{-- loi tu truyen qa ben day --}}
                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>



                                    <div class="form-group">
                                        <label for="short_description">Short Description</label>
                                        {{-- <div name="short_description" id="short_description"></div> --}}
                                        <textarea name="short_description" id="short_description"></textarea>




                                        {{-- <input name="short_description" type="text"
                                            value="{{ old('short_description') }}" class="form-control"
                                            id="short_description" placeholder="Enter short_description"> --}}
                                        {{-- loi tu truyen qa ben day --}}
                                        @error('short_description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="qty">Quantity</label>
                                        <input name="qty" type="number" value="{{ old('qty') }}"
                                            class="form-control" id="qty" placeholder="Enter Quantity">
                                        {{-- loi tu truyen qa ben day --}}
                                        @error('qty')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <div name="description" id="description"></div>
                                        {{-- <input name="description" type="text" value="{{ old('description') }}"
                                            class="form-control" id="description" placeholder="Enter description"> --}}
                                        {{-- loi tu truyen qa ben day --}}
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input name="image" type="file" value="{{ old('image') }}"
                                            class="form-control" id="image" placeholder="Enter image">
                                        {{-- loi tu truyen qa ben day --}}
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="custom-select" name="status">
                                            <option value="">---Please Select---</option>
                                            <option {{ old('status') == '1' ? 'selected' : '' }} value="1">Show
                                            </option>
                                            <option {{ old('status') == '0' ? 'selected' : '' }} value="0">Hide
                                            </option>
                                        </select>
                                        @error('status')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>



                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--/.col (left) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('js-custom')
<script>

    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('#name').on('keyup', function() {
            var name = $('#name').val();
            console.log('name', name);

            $.ajax({
            method: "POST",
            url: "{{ route('admin.product.create.slug') }}",
            data:           {
                            'name': name,
                            '_token' : '{{ csrf_token() }}'
                            },
            success:function(response){
                $('#slug').val(response.slug);
                                        }
                });
            });
        });




</script> --}}

@endsection
