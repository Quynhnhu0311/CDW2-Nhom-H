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

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Orders</h3>
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
                            <?php
                                $i = 1;
                            ?>
                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th style="width: 15%"> Customer Name </th>
                                <th style="width: 20%"> Order Code </th>
                                <th style="width: 15%"> Order Date </th>
                                <th style="width: 15%"> Order Status </th>
                                <th style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        @foreach($show_AllOrders as $key => $show_Order)
                            <tbody>
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        {{ $show_Order->customer->name }}
                                    </td>
                                    <td>
                                        {{ $show_Order->order_code }}
                                    </td>
                                    <td>
                                        {{ $show_Order->created_at }}
                                    </td>
                                    <td>
                                        @if($show_Order->order_status == 1)
                                            Đơn hàng mới
                                        @elseif($show_Order->order_status == 2)
                                            Đã xử lý  - Đã giao hàng
                                        @else
                                            Đã Hủy Đơn Hàng
                                        @endif
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm view" href="/detail-order/{{ $show_Order->order_code }}">
                                            <i class="far fa-eye"></i>
                                            View
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
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
