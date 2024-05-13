@extends('admin.layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <div class="col-md-4 text-right">
            <a class="btn btn-primary" href="{{ route('admin.product.create') }}">Add</a>
        </div>
        <section class="content">
            <div class="container-fluid">
                @if (session('message'))
                    <div class="col-sm-12 alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product List Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table id="table-admin" class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Product Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ number_format($product->price, 2) }}</td>
                                                <td>
                                                    @php
                                                        $imagesLink = is_null($product->image) || !file_exists('images/' . $product->image) ? 'https://phutungnhapkhauchinhhang.com/wp-content/uploads/2020/06/default-thumbnail.jpg' : asset('images/' . $product->image);
                                                    @endphp
                                                    <img src="{{ $imagesLink }}" alt="{{ $product->name }}" width="150"
                                                        height="150" />
                                                </td>
                                                {{-- <td>{!! $product->short_description !!}</td> --}}
                                                <td>{{ $product->product_category->name }}</td>
                                                {{-- <td>{{ $product->product_category->name }}</td> --}}
                                                <td>
                                                    <form
                                                        action="{{ route('admin.product.destroy', ['product' => $product->id]) }}"
                                                        method="post">
                                                        @csrf

                                                        <button onclick="return confirm('Are you sure ?')" type="submit"
                                                            class="btn btn-danger" name="sumbit">Delete</button>
                                                    </form>
                                                    <a href="{{ route('admin.product.show', ['product' => $product->id]) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    @if (!is_null($product->deleted_at))
                                                        <a href="{{ route('admin.product.restore', ['product' => $product->id]) }}"
                                                            class="btn btn-success">Restore</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">No data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                {{ $products->links('pagination::bootstrap-5') }}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js-custom')
    <script type="text/javascript">
        // $('#table-product').dataTable();
    </script>
@endsection


{{-- @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mt-4">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Admin Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table id="table-admin" class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Avatar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($admins as $admin)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>{{ $admin->role == 1 ? 'Admin' : '' }}</td>
                                                <td>
                                                    @php
                                                        $imagesLink = is_null($admin->image) || !file_exists('images/' . $admin->image) ? 'https://phutungnhapkhauchinhhang.com/wp-content/uploads/2020/06/default-thumbnail.jpg' : asset('images/' . $admin->image);
                                                    @endphp
                                                    <img src="{{ $imagesLink }}" alt="{{ $admin->name }}"
                                                        width="50" />
                                                </td>
                                                <td>
                                                    <form class="d-inline"
                                                        action="{{ route('admin.admins.destroy', ['admin' => $admin->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button onclick="return confirm('Are u sure !')" type="submit"
                                                            name="submit" class="btn btn-danger">Soft delete</button>
                                                    </form>
                                                    <a href="{{ route('admin.admins.show', ['admin' => $admin->id]) }}"
                                                        class="btn btn-primary">Detail</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">No data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection --}}
