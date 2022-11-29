@extends('admin.master')
@section('content-admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Protype</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Protype</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
    @if (session('error'))
    <div class="popup">
        <p style="color:#e47878;font-weight:bold;margin-left: 10px;">{{ session('error') }}</p>
    </div>
    @endif
    <!-- Main content -->
    <section class="content">
      @foreach($protypes as $row => $protypes)
      <form action="{{url ('update_protype/'.$protypes->type_id) }}" method="post" enctype="multipart/form-data">
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
                <label for="inputName">Manu Name</label>
                <input type="text" id="inputName" value="{{$protypes->type_name}}" class="form-control" name="type_name" required>
              <div class="form-group">
                <label for="inputName">Quantity</label>
                <input type="number" id="inputQty" value="{{$protypes->type_qty}}" class="form-control" name="type_qty" required>
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
          <input name="submit" type="submit" value="Edit Protype" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection