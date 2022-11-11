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
                            <li class="breadcrumb-item active">Coupons</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.container-fluid -->

        <!-- Main content -->
        <section class="content">
            @foreach($edit_coupon as $row => $edit_coupon)
            <form action="/update-coupon/{{ $edit_coupon->coupon_id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Coupon</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            @if(session()->has('message_update_coupon'))
                                <div class="alert text-alert">
                                    {{ session()->get('message_update_coupon') }}
                                </div>
                                <?php session()->forget(['message_update_coupon']); ?>
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputCouponName">Coupon Name</label>
                                    <input type="text" id="inputName" value="{{ $edit_coupon->coupon_name }}" class="form-control" name="coupon_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputCouponPrice">Coupon Code</label>
                                    <div class="group-price">
                                    <input type="text" id="inputName" value="{{ $edit_coupon->coupon_code }}" class="form-control" name="coupon_code" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCouponQty">Coupon Quantity</label>
                                    <div class="group-price">
                                        <input type="number" min="1" id="inputQty" class="form-control" name="coupon_qty" value="{{ $edit_coupon->coupon_qty }}">
                                    </div>
                                </div>
                                @if($edit_coupon->coupon_condition == 1)
                                    <div class="form-group">
                                        <label for="inputManu">Coupon Condition</label><br>
                                        <select id="inputManu" class="form-control custom-select" name="coupon_condition">
                                            <option selected value="{{ $edit_coupon->coupon_condition }}">Giảm Theo VNĐ</option>
                                            <!-- <option value="{{ $edit_coupon->coupon_condition }}">Giảm Theo %</option> -->
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNumber">Reduction Price</label><br>
                                        <div class="group-price">
                                            <input type="number" min="1000" id="inputQty" class="form-control" name="coupon_number" value="{{ $edit_coupon->coupon_number }}">
                                            <input type="button" class="vnđ" value="VNĐ" disabled>
                                        </div>
                                    </div>
                                @elseif($edit_coupon->coupon_condition == 2)
                                    <div class="form-group">
                                        <label for="inputManu">Coupon Condition</label><br>
                                        <select id="inputManu" class="form-control custom-select" name="coupon_condition">
                                            <!-- <option value="{{ $edit_coupon->coupon_condition }}">Giảm Theo VNĐ</option> -->
                                            <option selected value="{{ $edit_coupon->coupon_condition }}">Giảm Theo %</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNumber">Reduction Price</label><br>
                                        <div class="group-price">
                                            <input type="number" min="1" max="100" id="inputQty" class="form-control" name="coupon_number" value="{{ $edit_coupon->coupon_number }}">
                                            <input type="button" class="phantram" value="%" disabled>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input name="submit" type="submit" value="Update Product" class="btn btn-success float-center">
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
