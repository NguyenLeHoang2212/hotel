@extends('admin.layout.master2')

@section('content')
    {{-- message --}}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mt-5">
                            <h4 class="card-title float-left mt-2">Customers</h4> <a href="{{ route('admin.addcustomer') }}" class="btn btn-primary float-right veiwbutton">Add Customers</a> </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body booking_card">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Booking ID</th>
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
                                            @foreach ($allCustomers as $customers )
                                            <tr>
                                                <td hidden class="id">{{ $customers->id }}</td>
                                                <td>{{ $customers->bkg_customer_id }}</td>
                                                <td>{{ $customers->name }}</td>

                                                <td>{{ $customers->room_type }}</td>
                                                <td>{{ $customers->total }}</td>

                                                <td>{{ $customers->arrival_date }}</td>
                                                <td>{{ $customers->depature_date }}</td>
                                                <td><a href="#" class="__cf_email__" data-cfemail="2652494b4b5f44435448474a66435e474b564a430845494b">{{ $customers->email }}</a></td>
                                                <td>{{ $customers->ph_number }}</td>
                                                <td>
                                                    <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v ellipse_color"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{ url('admin/customer/edit/'.$customers->bkg_customer_id) }}">
                                                                <i class="fas fa-pencil-alt m-r-5"></i> Edit
                                                            </a>
                                                            <a   class="dropdown-item" onclick="return confirm('Are you sure ?')" href="{{ route('admin.customer.delete',['bkg_customer_id' => $customers->id]) }}" >
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- delete model --}}
            {{-- <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <form action="{{ route('admin.customer.delete',['bkg_customer_id' => $bkg_customer_id->id]) }}" method="POST">
                                @csrf
                                <img src="" alt="" width="50" height="46">
                                <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                                <div class="m-t-20">
                                    <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                    <input class="form-control" type="hidden" id="e_id" name="id" value="">
                                    <input class="form-control" type="hidden" id="e_fileupload" name="fileupload" value="">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- end delete model --}}
        </div>


@endsection
