@extends('master')
@section('content-customer')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update info Customer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">products</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{  url('add-info-customer') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update</h3>
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
                                <label for="inputName">Ng??y Sinh</label>
                                <input type="date" id="inputName" class="form-control" name="dateofbirth" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPrice">S??? ??i???n Tho???i</label>
                                <div class="group-price">
                                    <input type="number" id="inputPrice" class="form-control" name="phone" required>
                                </div>
                            </div>
                            <div class="form-group qty">
                            <select name="sex" id="cars">
                                <option value="Nam">Nam</option>
                                <option value="N???">N???</option>
                            </select>
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
                    <input name="submit" type="submit" value="Update Infomation Customer" class="btn-add btn btn-success float-center">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection