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
                            <div class="card-header">
                                <h3 class="card-title">Room List</h3>
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($rooms as $room)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $room->name }}</td>
                                                <td>{{ number_format($room->price, 2) }}</td>
                                                <td>
                                                    @php
                                                        $imagesLink = is_null($room->image) || !file_exists('images/' . $room->image) ? 'https://phutungnhapkhauchinhhang.com/wp-content/uploads/2020/06/default-thumbnail.jpg' : asset('images/' . $room->image);
                                                    @endphp
                                                    <img src="{{ $imagesLink }}" alt="{{ $room->name }}" width="150"
                                                        height="150" />
                                                </td>
                                                {{-- <td>{!! $product->short_description !!}</td> --}}
                                                {{-- <td>{{ $product->product_category->name }}</td> --}}
                                                <td>
                                                    <form action="{{ route('admin.room.destroy', ['room' => $room->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button onclick="return confirm('Are you sure ?')" type="submit"
                                                            class="btn btn-danger" name="sumbit">Delete</button>
                                                    </form>
                                                    <a href="{{ route('admin.room.show', ['room' => $room->id]) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    @if (!is_null($room->deleted_at))
                                                        <a href="{{ route('admin.room.restore', ['room' => $room->id]) }}"
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
                                {{ $rooms->links('pagination::bootstrap-5') }}
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
