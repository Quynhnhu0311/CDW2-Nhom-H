@extends('admin.master')
@section('content-admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Staff Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Staff Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="{{url ('save-staff') }}" method="post" enctype="multipart/form-data" oninput='staff_repassword.setCustomValidity(staff_repassword.value != staff_password.value ? "Passwords do not match." : "")'>
      {{ csrf_field() }}
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
                <label for="inputName">Staff Name</label>
                <input type="text" id="inputName" class="form-control" name="staff_name" required>
              </div>
              <div class="form-group">
                <label for="inputName">Staff Email</label>
                <input type="email" id="inputName" class="form-control" name="staff_email" required>
                <?php
                $message = Session::get('message');
                if ($message) {
                  echo '<span class="text-alert" style="color:red; background: none;">' . $message . '</span>';
                  Session::put('message', null);
                }
                ?>
              </div>
              <div class="form-group">
                <label for="inputName">Staff Password</label>
                <input type="password" id="inputName" class="form-control" name="staff_password" required>
              </div>
              <div class="form-group">
                <label for="inputName">Staff RePassword</label>
                <input type="password" id="inputName" class="form-control" name="staff_repassword" required>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input name="submit" type="submit" value="Create new Staff" class="btn btn-success float-right">
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection