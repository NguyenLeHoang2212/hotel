@extends('admin.layout.master')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product category</h1>
                    @if (session('message'))
                        <div class="col-sm-6 alert alert-success" >
                            {{ session('message') }}
                        </div>
                    @endif
                    <div><a href="{{ route('admin.product_category.add') }}"><Button>Add</Button></a></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User List</li>
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
                            <h3 class="card-title">User List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>Id</th>
                                        <th>Name</th>
                                        <th >Status</th>
                                        <th >Created At</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($productCategories as $productCategory)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $productCategory->name }}</td>
                                        <td><div class="{{ $productCategory->status ? 'btn btn-success' : 'btn btn-danger' }}">{{ $productCategory->status ? 'show' : 'hide' }}</div> </td>
                                        <td>{{ $productCategory->created_at }}</td>
                                        <td><a href="{{ route('admin.product_category.detail',['id' => $productCategory->id]) }}" class="btn btn-primary" >Detail</a></td>


                                    </tr>
                                    @empty
                                    <tr>  <td>No Data</td></tr>

                                    @endforelse


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
