@extends('master')
@section('content-customer')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Customer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if (session('error-update-customer'))
    <div class="popup">
        <p style="color:#e47878;font-weight:bold;margin-left: 10px;">{{ session('error-update-customer') }}</p>
    </div>
    @endif
    @if (session('error-phone-update'))
    <div class="popup">
        <p style="color:#e47878;font-weight:bold;margin-left: 10px;">{{ session('error-phone-update') }}</p>
    </div>
    @endif
    @if (session('error-address-customer'))
    <div class="popup">
        <p style="color:#e47878;font-weight:bold;margin-left: 10px;">{{ session('error-address-customer') }}</p>
    </div>
    @endif
    <!-- Main content -->
    <section class="content">
      @foreach($address as $row)
      <form action="{{url ('update-address/'.$row->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
       @method('PUT')
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
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Address</label>
                  <input type="text" id="inputName" value="{{ $row->address }}" class="form-control" name="address" required>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      @endforeach
      <div class="row">
        <div class="col-12">
          <input name="submit" type="submit" value="Edit Address" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection