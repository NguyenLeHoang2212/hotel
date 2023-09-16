@extends('admin.layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-8">

                                    </div>
                                    <div class="col-md-4 text-right">
                                        <a class="btn btn-primary" href="{{ route('admin.product.create') }}">Add</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Product category Name</th>
                                            <th>Information</th>
                                            <th>Image</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price  }}</td>
                                            <td>{{ $product->product_category_name  }}</td>
                                            <td>{!! $product->information !!}</td>
                                            <td>
                                                @php
                                                    $imageLink = is_null($product->image) || !file_exists('images/'.$product->image) ? asset('images/60455f30a3d1768f2fc0.jpg') : asset('images/'.$product->image);
                                                @endphp
                                                <img style="padding : 50 ;"  width="150" height="150" alt="{{ $product->name }}" src="{{ $imageLink }}" />
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.product.destroy',['product' => $product->id]) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button onclick="return confirm('Are You Sure')" type="submit" name="delete" class="btn btn-danger">Delete</button>
                                                </form>


                                            </td>
                                            <td><a href="{{ route('admin.product.show',['product' => $product->id]) }}" class="btn btn-primary">Edit</a></td>
                                        </tr>
                                        @empty
                                        <td colspan="5">No Data</td>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{ $products->links('admin.pagination.my-pagination') }}
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
