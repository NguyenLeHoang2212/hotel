{{-- @extends('admin.layout.master')

@section('content')

@endsection

 --}}
@extends('admin.layout.master')
@section('content')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                {{-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col --> --}}
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    {{-- {{ dd($qty_per_product) }} --}}
    <!-- Main content -->
    <section  class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $totalAppointment->totalAppointment }}</h3>

                            <p>Total booking Appointments</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('admin.allbooking') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-6">
                    <!-- small box -->

                        <div id="order" ></div>


                </div>
                <!-- ./col -->

                <!-- ./col -->

                <!-- ./col -->
            </div>
            <div  class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $totalOrder->totalOrder }}</h3>

                            <p>Total Orders</p>

                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('admin.orders') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $totalRegister->totalRegister }}</h3>

                            <p>User register</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-6 col-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div id="order-summary" style="width:100%;"></div>
                    <!-- /.card -->
                </div>

                <div class="col-md-6 col-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div id="donutchart" style="width:100%;"></div>
                    <!-- /.card -->
                </div>

                <div class="col-md-6 col-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div id="booking-summary" style="width:100%;"></div>
                    <!-- /.card -->
                </div>

                <div class="col-md-6 col-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div id="total-appoinment" style="width:100%;"></div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
</div>
@endsection

@section('js-custom')
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(@json($arrayDatas));
            var options = {
                title: 'Product',
                is3D: true,
            };
            var chart = new google.visualization.PieChart(document.getElementById('order'));
            chart.draw(data, options);
        }
    </script>
@endsection
