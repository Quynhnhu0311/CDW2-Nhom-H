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
                <li class="breadcrumb-item"><a href="/admin.dashboard">Home</a></li>
                <li class="breadcrumb-item active">Coupons</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>
        @if(session()->has('message_deleteCoupon'))
            <div class="alert text-alert">
                {{ session()->get('message_deleteCoupon') }}
            </div>
            <?php session()->forget(['message_deleteCoupon']); ?>
        @endif
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Coupons</h3>
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
                    <?php $i = 1; ?>
                        <thead>
                            <tr>
                                <th style="width: 2%">
                                    ID
                                </th>
                                <th style="width: 15%"> Coupon Name </th>
                                <th style="width: 15%"> Coupon Code </th>
                                <th style="width: 12%"> Coupon Quantity </th>
                                <th  style="width: 11%">Coupon Condition</th>
                                <th  style="width: 10%">Reduction Price</th>
                                <th  style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($get_all_coupon as $key => $get_all_coupon)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    {{ $get_all_coupon->coupon_name }}
                                </td>
                                <td>
                                    {{ $get_all_coupon->coupon_code }}
                                </td>
                                <td>
                                    {{ $get_all_coupon->coupon_qty }}
                                </td>
                                <td>
                                    {{ $get_all_coupon->coupon_condition }}
                                </td>
                                <td>
                                    @if($get_all_coupon->coupon_condition == 1)
                                        {{ number_format($get_all_coupon->coupon_number) }} VNĐ
                                    @elseif($get_all_coupon->coupon_condition == 2)
                                        {{ $get_all_coupon->coupon_number }} %
                                    @endif
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm edit-coupon" href="/edit-coupon/{{ $get_all_coupon->coupon_id }}">
                                        <i class="fas fa-pencil-alt"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm delete-coupon" href="/delete-coupon/{{ $get_all_coupon->coupon_id }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
