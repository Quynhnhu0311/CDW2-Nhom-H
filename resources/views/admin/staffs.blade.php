@extends('admin.master')
@section('content-admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Staff</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin.dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Staff</li>
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
                <h3 class="card-title">Staff</h3>
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
                            <th style="width: 15%"> Staff Name </th>
                            <th style="width: 20%"> Staff Email </th>
                            <th style="width: 15%"> Staff Password </th>
                            <th style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    @foreach($show_staffs as $staff)
                    <tr>
                        <td>
                            {{ $staff->id }}
                        </td>
                        <td>
                            {{ $staff->staff_name }}
                        </td>
                        <td>
                            {{ $staff->staff_email }}
                        </td>
                        <td>
                            <input type="password" style="background: none; color: white;border:none" disabled value="{{ $staff->staff_password }}">
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm edit-coupon" href="admin.editstaff/{{$staff->id}}">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm delete-coupon" onclick="location.href='delete-staff/{{$staff->id}}'">
                                <i class="fas fa-trash"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
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