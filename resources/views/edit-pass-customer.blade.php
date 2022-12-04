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
    @if (session('error-old-update'))
    <div class="popup">
        <p style="color:#e47878;font-weight:bold;margin-left: 10px;">{{ session('error-old-update') }}</p>
    </div>
    @endif
    @if (session('error-pass-update'))
    <div class="popup">
        <p style="color:#e47878;font-weight:bold;margin-left: 10px;">{{ session('error-pass-update') }}</p>
    </div>
    @endif
    @if (session('error-re-update'))
    <div class="popup">
        <p style="color:#e47878;font-weight:bold;margin-left: 10px;">{{ session('error-re-update') }}</p>
    </div>
    @endif
    @if (session('status'))
    <div class="popup">
        <p style="color:#c5e7e4;font-weight:bold;margin-left: 10px;">{{ session('status') }}</p>
    </div>
    @endif
    @if (session('error-old-customer'))
    <div class="popup">
        <p style="color:#c5e7e4;font-weight:bold;margin-left: 10px;">{{ session('error-old-customer') }}</p>
    </div>
    @endif
    <!-- Main content -->
    <section class="content">
      @foreach($customer as $row)
      <form action="{{url ('update-password/'.$row->id) }}" method="post" enctype="multipart/form-data">
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
                  <label for="inputName">Mật Khẩu Cũ</label>
                  <input type="password" id="inputName" value="" class="form-control" name="old_pass" required>
                </div>
                <div class="form-group">
                  <label for="inputName">Mật Khẩu Mới</label>
                  <input type="password" id="inputName" value="" class="form-control" name="new_pass" required>
                </div>
                <div class="form-group">
                  <label for="inputName">Nhập lại mật khẩu Mới</label>
                  <input type="password" id="inputName" value="" class="form-control" name="re_pass" required>
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
          <input name="submit" type="submit" value="Edit Manufacture" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection