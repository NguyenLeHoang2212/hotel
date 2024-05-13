@extends('admin.layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
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
                            <div style="gap: 12px"
                                class="card-header d-flex align-items-center flex-md-row flex-column mb-sm-0 mb-5">
                                <h3 class="card-title">Product Category</h3>
                                <form method="get">
                                    <input type="text" value="{{ $keyword }}" placeholder="Search..."
                                        name="keyword">
                                    <select name="sortBy">
                                        <option value="">---Please Select---</option>
                                        <option {{ $sortBy === 'latest' ? 'selected' : '' }} value="latest">
                                            Latest</option>
                                        <option {{ $sortBy === 'oldest' ? 'selected' : '' }} value="oldest">
                                            Oldest</option>
                                    </select>
                                    <select name="status">
                                        <option value="">---Please Select---</option>
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select>
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </form>
                                <div class="text-right">
                                    <a class="btn btn-primary" href="{{ route('admin.product_category.add') }}">Add</a>
                                    {{-- <a href="{{ route('admin.product_category.destroy', ['product_category' => $product_category]) }}"
                                        class="btn btn-primary">Delete</a> --}}
                                </div>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table id="table-admin" class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($productCategories as $productCategory)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $productCategory->name }}</td>
                                                <td>
                                                    <div
                                                        class="{{ $productCategory->status ? 'btn btn-success' : 'btn btn-danger' }}">
                                                        {{ $productCategory->status ? 'Show' : 'Hide' }}</div>
                                                </td>
                                                <td>{{ $productCategory->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('admin.product_category.detail', ['product_category' => $productCategory->id]) }}"
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
                            <div class="card-footer clearfix">
                                {{ $productCategories->links('pagination::bootstrap-5') }}
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
