@extends('admin.master')
@section('content-admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Customer Edit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Customer Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="{{url ('update-customer') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            @foreach($edit_customer as $customer)
            <div class="card-body">
              <input type="hidden" id="inputName" class="form-control" name="customer_id" value="{{$customer->id}}" required>
              <div class="form-group">
                <label for="inputName">customer Name</label>
                <input type="text" id="inputName" class="form-control" name="customer_name" value="{{$customer->name}}" required>
              </div>
              <div class="form-group">
                <label for="inputName">customer Email</label>
                <input type="email" id="inputName" class="form-control" name="customer_email" value="{{$customer->email}}" required>
                <?php
                $message = Session::get('message');
                if ($message) {
                  echo '<span class="text-alert" style="color:red; background: none;">' . $message . '</span>';
                  Session::put('message', null);
                }
                ?>
              </div>
              <div class="form-group">
                <label for="inputName">customer Password</label>
                <input type="password" id="inputName" class="form-control" name="customer_password" value="{{$customer->password}}" required>
              </div>
            </div>
            @endforeach
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input name="submit" type="submit" value="Update customer" class="btn btn-success float-right">
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection