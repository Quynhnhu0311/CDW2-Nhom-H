@extends('master')
@section('content-customer')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Products</h1>
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
        <form action="{{  url('save-customer-info') }}" method="post" enctype="multipart/form-data">
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
                            <div class="form-group">
                                <label for="inputName">Ngày Sinh</label>
                                <input type="date" id="inputName" class="form-control" name="product_name" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPrice">Số Điện Thoại</label>
                                <div class="group-price">
                                    <input type="number" id="inputPrice" class="form-control" name="product_price" required>
                                </div>
                            </div>
                            <div class="form-group qty">
                                <label for="inputQty">Giới Tính</label>
                                <input type="number" min="1" value="1" id="inputQty" class="form-control" name="product_qty">
                            </div>
                            <input type="hidden" value="0" id="inputQty" class="form-control" name="product_sold">
                            <div class="form-group">
                                <label for="inputDe cription">Avatar</label>
                                <input type="hidden" id="inputToken" class="form-control" name="product_token" value="">
                                <input type="text" id="inputDescription" class="form-control" name="product_description" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input name="submit" type="submit" value="Create New Product" class="btn btn-success float-center">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection