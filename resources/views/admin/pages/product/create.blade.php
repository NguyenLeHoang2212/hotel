@extends('admin.layout.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Product Infor</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Product Infor</li>
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
                                <h3 class="card-title">Add Product Infor</h3>
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
                            <form role="form" action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data" >
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
                                        <label for="discount_price">Discount_Price</label>
                                        <input name="discount_price" type="text" value="{{ old('discount_price') }}"
                                            class="form-control" id="discount_price" placeholder="Enter discount_price">
                                        {{-- loi tu truyen qa ben day --}}
                                        @error('discount_price')
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
                                        <label for="shipping">Shipping</label>
                                        <input name="shipping" type="text" value="{{ old('shipping') }}"
                                            class="form-control" id="shipping" placeholder="Enter shipping">
                                        {{-- loi tu truyen qa ben day --}}
                                        @error('shipping')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>



                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        <input name="weight" type="text" value="{{ old('weight') }}"
                                            class="form-control" id="weight" placeholder="Enter weight">
                                        {{-- loi tu truyen qa ben day --}}
                                        @error('weight')
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

                                    <div class="form-group">
                                        <label for="product_category_id">Product Category</label>
                                        <select class="custom-select" name="product_category_id">
                                            <option value="">---Please Select---</option>

                                          @foreach ($productCategory as $productCategoriess )
                                              <option value="{{ $productCategoriess->id }}">{{ $productCategoriess->name }}</option>
                                          @endforeach

                                        </select>
                                        @error('product_category_id')
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
        .create( document.querySelector( '#short_description' ), {
            ckfinder: {
                // Upload the images to the server using the CKFinder QuickUpload command.
                uploadUrl: '{{ route('admin.product.ckedit.upload.image') . '?_token=' . csrf_token() }}'
            }
        } )
        .catch( error => {
            console.error( error );
        } );


    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#information' ) )
        .catch( error => {
            console.error( error );
        } );

</script>


@endsection
