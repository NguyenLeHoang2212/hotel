@extends('admin.layout.master')
@section('content')
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">

                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="test" class="form-control" id="Name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control">

                      <option> --please select</option>
                      <option> hide</option>
                      <option> show</option>
                    </select>
                  </div>
              </form>
            </div>
            <!-- /.card -->


  </div>
@endsection
