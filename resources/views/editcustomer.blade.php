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
    @if (session('error-info'))
    <div class="popup">
        <p style="color:#e47878;font-weight:bold;margin-left: 10px;">{{ session('error-info') }}</p>
    </div>
    @endif
    @if (session('error-customer'))
    <div class="popup">
        <p style="color:#e47878;font-weight:bold;margin-left: 10px;">{{ session('error-customer') }}</p>
    </div>
    @endif
    <!-- Main content -->
    <section class="content">
      @foreach($customer as $row)
      <form action="{{url ('update_info_customer/'.$row->id) }}" method="post" enctype="multipart/form-data">
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
                  <label for="inputName">Name</label>
                  <input type="text" id="inputName" value="{{ $row->name }}" class="form-control" name="name" required>
                </div>
                @foreach($row->infocustomers as $info)
                <div class="form-group">
                  <label for="inputName">Phone</label>
                  <input type="number" id="inputName" value="{{$info->phone}}" class="form-control" name="phone" required>
                </div>
                <div class="form-group">
                  <label for="inputName">Ngày Sinh</label>
                  <input type="date" id="inputQty" value="{{$info->dateOfBirth}}" class="form-control" name="date" required>
                </div>
                <div class="form-group">
                  <select name="sex" id="cars">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                  </select>
                </div>
                @endforeach
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      @endforeach
      <div class="row">
        <div class="col-12">
          <input name="submit" type="submit" value="Edit Customer" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection