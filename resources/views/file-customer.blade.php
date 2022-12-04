@extends('master')
@section('content-customer')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Hồ sơ của tôi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Quản lý thông tin hồ sơ để bảo mật tài khoản</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        @if(session()->has('message_update'))
            <div class="alert text-alert">
                {{ session()->get('message_update') }}
            </div>
            <?php session()->forget(['message_update']); ?>
        @endif
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Hồ Sơ</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                </div>
                @foreach($customer as $data)
                <div class="products-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 15%"> Name </th>
                                @foreach($data->infocustomers as $info)
                                <th style="width: 20%"> Số điện thoại </th>
                                <th style="width: 30%"> Ngày Sinh </th>
                                <th  style="width: 10%">Giới tính</th>
                                @endforeach
                                <th  style="width: 20%">Action</th>
                            </tr>
                            <tbody>
                                <tr>
                                <td>{{ $data->name}}</td>  
                                    @foreach($data->infocustomers as $info)
                                    <td>{{ $info->phone }}</td>
                                    <td>{{ $info->dateOfBirth }}</td>
                                    <td>{{ $info->sex }}</td>
                                    @endforeach
                                    <td class="project-actions text-center">
                                        <a style="margin:0 auto;" class="btn btn-info btn-sm btn-edit-customer" href="/editcustomer/{{ $data->id }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                @endforeach
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
