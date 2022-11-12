@extends('admin.master')
@section('content-admin')
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
                <li class="breadcrumb-item"><a href="/admin.dashboard">Home</a></li>
                <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>
        @if(session()->has('message_deleteProduct'))
            <div class="alert text-alert">
                {{ session()->get('message_deleteProduct') }}
            </div>
            <?php session()->forget(['message_deleteProduct']); ?>
        @endif
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Products</h3>
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
                                <th style="width: 15%"> Image </th>
                                <th style="width: 20%"> Name </th>
                                <th style="width: 10%"> Price </th>
                                <th  style="width: 8%">Quantity</th>
                                <th  style="width: 8%">Sold</th>
                                <th  style="width: 10%">Protype</th>
                                <th  style="width: 10%">Manufacture</th>
                                <th  style="width: 30%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($show_Allproducts as $key => $show_Allproducts)
                            <tr>
                                <td>{{ $show_Allproducts->product_id }}</td>
                                <td>
                                    <img src="{{ asset('/img/product/'.$show_Allproducts->product_img) }}" alt=""><br/>
                                </td>
                                <td>
                                    {{ $show_Allproducts->product_name }}
                                </td>
                                <td>
                                    {{ number_format($show_Allproducts->product_price) }}đ
                                </td>
                                <td>
                                    {{ $show_Allproducts->product_qty }}
                                </td>
                                <td>
                                    {{ $show_Allproducts->product_sold }}
                                </td>
                                <td>
                                    {{ $show_Allproducts->protype->type_name }}
                                </td>
                                <td>
                                    {{ $show_Allproducts->manufacture->manu_name }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm product" href="/edit-product/{{ $show_Allproducts->product_id }}">
                                        <i class="fas fa-pencil-alt"></i>
                                        Edit
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa product này không?')" class="btn btn-danger btn-sm" href="/delete-product/{{ $show_Allproducts->product_id }}">
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
