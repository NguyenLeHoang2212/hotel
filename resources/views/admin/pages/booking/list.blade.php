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
                                <h3 class="card-title">Booking List</h3>
                                <a href="{{ route('admin.booking.add') }}"
                                    class="btn btn-primary float-right veiwbutton ">Add
                                    Booking</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table id="table-admin" class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Room Type</th>
                                            <th>Total </th>
                                            <th>Arrival Date</th>
                                            <th>Depature Date</th>
                                            <th>Email</th>
                                            <th>Ph.Number</th>
                                            <th>Status</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allBookings as $bookings)
                                            <tr>
                                                <td>{{ $bookings->id }}</td>


                                                <td>{{ $bookings->name }}</td>

                                                <td>{{ $bookings->room_type }}</td>
                                                <td>{{ $bookings->total }}</td>

                                                <td>{{ $bookings->arrival_date }}</td>
                                                <td>{{ $bookings->depature_date }}</td>
                                                <td><a href="#" class="__cf_email__"
                                                        data-cfemail="2652494b4b5f44435448474a66435e474b564a430845494b">{{ $bookings->email }}</a>
                                                </td>
                                                <td>{{ $bookings->ph_number }}</td>
                                                <td>
                                                    <div class="actions"> <a href="#"
                                                            class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v ellipse_color"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                                href="{{ url('admin/booking/edit/' . $bookings->bkg_id) }}">
                                                                <i class="fas fa-pencil-alt m-r-5"></i> Edit
                                                            </a>
                                                            <a class="dropdown-item"
                                                                onclick="return confirm('Are you sure ?')"
                                                                href="{{ route('admin.booking.delete', ['bkg_id' => $bookings->id]) }}">
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                {{-- {{ $bookings->links('pagination::bootstrap-5') }} --}}
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

@section('script')
    {{-- delete model --}}
    <script>
        $(document).on('click', '.bookingDelete', function() {
            var _this = $(this).parents('tr');
            $('#e_id').val(_this.find('.id').text());
        });
    </script>
@endsection
@endsection
