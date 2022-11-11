@extends('admin.master')
@section('content-admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Coupons</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">coupons</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="/save-coupon" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New Coupon</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        @if(session()->has('message_add'))
                            <div class="alert text-alert">
                                {{ session()->get('message_add') }}
                            </div>
                            <?php session()->forget(['message_add']); ?>
                        @elseif(session()->has('message_add_error'))
                            <div class="alert text-alert-error">
                                {{ session()->get('message_add_error') }}
                            </div>
                            <?php session()->forget(['message_add_error']); ?>
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Coupon Name</label>
                                <input type="text" id="inputCouponName" class="form-control" name="coupon_name" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPrice">Coupon Code</label>
                                <input type="text" id="inputName" class="form-control" name="coupon_code" required>
                            </div>
                            <div class="form-group">
                                <label for="inputCoupon">Coupon Quantity</label>
                                <input type="number" min="1" id="inputQty" value="1" class="form-control" name="coupon_qty" required>
                            </div>
                            <div class="form-group">
                                <label for="inputManu">Coupon Condition</label><br>
                                <select id="inputCondition" class="form-control custom-select" name="coupon_condition">
                                    <option selected value="1">Giảm Theo VNĐ</option>
                                    <option value="2">Giảm Theo %</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputCouponNumber">Reduction Price</label>
                                <input type="text" id="inputNumber" class="form-control" name="coupon_number" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input name="submit" id="btnCreateCoupon" type="submit" value="Create New Coupon" class="btn btn-success float-center">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
