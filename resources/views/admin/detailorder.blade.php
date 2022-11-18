@extends('admin.master')
@section('content-admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin.dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Buyer Info</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="products-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th style="width: 15%"> Customer Name </th>
                                <th style="width: 20%"> Customer Email </th>
                                <th style="width: 15%"> Customer Phone </th>
                                <th style="width: 15%"> Customer Address </th>
                                <th style="width: 15%"> Customer Note </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $i = 1;
                            ?>
                            @foreach($shippings as $key => $shippings)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    {{ $shippings->customer_fistname }} {{ $shippings->customer_lastname }}
                                </td>
                                <td>
                                    {{ $shippings->customer_email }}
                                </td>
                                <td>
                                    {{ $shippings->customer_phone }}
                                </td>
                                <td>
                                    {{ $shippings->customer_address }}, {{ $shippings->customer_province }},
                                    {{ $shippings->customer_district }}, {{ $shippings->customer_town }}
                                </td>
                                <td>
                                    {{ $shippings->customer_note }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Order Info</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="products-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 2%">
                                    ID
                                </th>
                                <th style="width: 15%"> Product Name </th>
                                <th style="width: 9%"> Product Price </th>
                                <th style="width: 10%"> Product Quantity </th>
                                <th style="width: 9%"> Total </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $i = 1;
                                $subtotal = 0;
                            ?>
                            @foreach($order_details as $key => $order_details)
                                <?php
                                    $total = $order_details->product_price * $order_details->product_qty;
                                    $subtotal += $total;
                                ?>
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <input type="hidden" value="{{ $order_details->product_id }}" name="order_product_id">
                                    {{ $order_details->product_name }}
                                </td>
                                <td>
                                    {{ number_format($order_details->product_price) }} VNĐ
                                </td>
                                <td style="display: flex;">
                                        <input type="number" min="1" name="product_sale_quantity" class="form-control order_qty_{{ $order_details->product_id }}" value="{{ $order_details->product_qty }}">
                                        <input type="hidden" value="{{ $order_details->product_qty }}" name="order_product_qty">
                                        <input type="hidden" value="{{ $order_details->product_id }}" name="order_prod_id" class="order_prod_id">
                                        <input type="hidden" value="{{ $order_details->order_code }}" name="order_code" class="order_code">
                                        <input name="update_quantity_product" type="submit" data-product_id="{{ $order_details->product_id }}" value="Update" class="btn btn-success update_quantity_product">

                                </td>
                                <td>
                                    {{ number_format($total) }} VND
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="group-total">
                    <div class="form-group coupon">
                        <label for="inputPrice">Coupon</label>
                        <div class="group-price">
                            @if($coupon_code_cart)
                                <input type="text" class="form-control coupon" value="{{ $coupon_code_cart}}" disabled>
                            @endif
                        </div>
                    </div>
                    <?php
                        $subtotal_after_coupon = 0;
                    ?>
                    @if($coupon_condition == 1)
                        <div class="form-group discount">
                            <label for="inputPrice">Discount</label>
                            <div class="group-price">
                                <input type="text" class="form-control discount" value="Giảm {{ $coupon_number }} VNĐ" disabled>
                            </div>
                        </div>
                        <?php
                            $subtotal_after_coupon =  $subtotal - $coupon_condition;
                        ?>
                        <div class="form-group total">
                            <label for="inputPrice">SubTotal</label>
                            <div class="group-price">
                                <input type="text" class="form-control total" value="{{ number_format($subtotal_after_coupon) }}" disabled>
                                <input type="button" class="vnđ" value="VNĐ" disabled>
                            </div>
                        </div>
                    @elseif($coupon_condition == 2)
                        <div class="form-group discount">
                            <label for="inputPrice">Discount</label>
                            <div class="group-price">
                                <input type="text" class="form-control discount" value="Giảm {{ $coupon_number }} %" disabled>
                            </div>
                        </div>
                        <?php
                            $subtotal_after_coupon = $subtotal - ($subtotal * $coupon_condition) / 100;
                        ?>
                        <div class="form-group total">
                            <label for="inputPrice">SubTotal</label>
                            <div class="group-price">
                                <input type="text" class="form-control total" value="{{ number_format($subtotal_after_coupon) }}" disabled>
                                <input type="button" class="vnđ" value="VNĐ" disabled>
                            </div>
                        </div>
                    @else
                        <div class="form-group discount">
                            <label for="inputPrice">Discount</label>
                            <div class="group-price">
                                <input type="text" class="form-control discount" value="0" disabled>
                            </div>
                        </div>
                        <div class="form-group total">
                            <label for="inputPrice">SubTotal</label>
                            <div class="group-price">
                                <input type="text" class="form-control total" value="{{ number_format($subtotal) }}" disabled>
                                <input type="button" class="vnđ" value="VNĐ" disabled>
                            </div>
                        </div>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Order Action</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="products-body p-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="form-group status">
                                    <label for="inputType">Order Status</label><br>
                                    @foreach($order_status as $row => $order_status)
                                        @if($order_status->order_status == 1)
                                            <form>
                                                @csrf
                                                <select class="form-control update_order_qty">
                                                    <option id="{{ $order_status->order_id }}" selected value="1">Đơn Hàng Mới</option>
                                                    <option id="{{ $order_status->order_id }}" value="2">Đã Xử Lý - Đang Giao Hàng</option>
                                                    <option id="{{ $order_status->order_id }}" value="3">Hủy Đơn Hàng</option>
                                                </select>
                                            </form>
                                        @elseif($order_status->order_status == 2)
                                            <form>
                                                @csrf
                                                <select class="form-control update_order_qty">
                                                    <option id="{{ $order_status->order_id }}" disabled value="1">Đơn Hàng Mới</option>
                                                    <option id="{{ $order_status->order_id }}" selected value="2">Đã Xử Lý - Đang Giao Hàng</option>
                                                    <option id="{{ $order_status->order_id }}" value="3">Hủy Đơn Hàng</option>
                                                </select>
                                            </form>
                                        @else
                                            <form>
                                                @csrf
                                                <select class="form-control update_order_qty">
                                                    <option id="{{ $order_status->order_id }}" disabled value="1">Đơn Hàng Mới</option>
                                                    <option id="{{ $order_status->order_id }}" value="2">Đã Xử Lý - Đang Giao Hàng</option>
                                                    <option id="{{ $order_status->order_id }}" selected value="3">Hủy Đơn Hàng</option>
                                                </select>
                                            </form>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
