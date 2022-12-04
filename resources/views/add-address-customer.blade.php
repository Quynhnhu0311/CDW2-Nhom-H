@extends('master')
@section('content-customer')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Address</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Address</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @if (session('error-customer'))
    <div class="popup">
        <p style="color:#e47878;font-weight:bold;margin-left: 10px;">{{ session('error-customer') }}</p>
    </div>
    @endif
    @if (session('error-address'))
    <div class="popup">
        <p style="color:#e47878;font-weight:bold;margin-left: 10px;">{{ session('error-address') }}</p>
    </div>
    @endif
    <!-- Main content -->
    <section class="content">
        <form action="{{  url('add-address-customer') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add address</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                        <?php    $id = Session::get('id');?>
                        <div class="form-group">
                                @if($id)
                                <input type="hidden" value="<?php echo $id ?>" id="inputName" class="form-control" name="id_customer" required>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="inputName">Address</label>
                                <input type="text" id="inputName" class="form-control" name="address" required>
                            </div>
                            <!-- <div class="form-group">
                                <label for="inputImage">Avatar</label>
                                <input type="file" id="inputImage" class="form-control" name="avatar" required>
                            </div> -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input name="submit" type="submit" value="Create New Address" class="btn-add btn btn-success float-center">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection