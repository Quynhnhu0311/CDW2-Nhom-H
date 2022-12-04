@extends('master')
@section('content-customer')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add address</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin.dashboard">Home</a></li>
                <li class="breadcrumb-item active">Address</li>
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
                <h3 class="card-title">Address Customer</h3>
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
                                <th style="width: 50%"> Địa Chỉ </th>
                                <th  style="width: 50%">Action</th>
                            </tr>
                            <tbody>
                                @foreach($address as $data)
                                <tr>  
                                    <td>{{ $data->address }}</td>
                                    <td class="project-actions text-center">
                                        <a style="margin:0 auto;" class="btn btn-info btn-sm btn-edit-customer" href="/edit-add-customer/{{ $data->id_address_customer }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <form class="btn btn-danger btn-sm" method="POST" action="/delete-address-customer/{{ $data->id_address_customer }}" onsubmit="return confirm('Bạn Có Muốn Xóa Không?')">
                                        @method('DELETE')
                                        @csrf
                                        <i class="fas fa-trash">
                                            </i>
                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                        <button style="background-color: #e74c3c;border:0" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a style="margin:0 auto;width:300px;line-height: 2.7;height: 50px;" class="btn btn-info btn-sm btn-edit-customer" href="{{ url('add-address-customer') }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Add Address
                    </a>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    
    <!-- /.content-wrapper -->
@endsection
