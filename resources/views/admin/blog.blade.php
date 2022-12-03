@extends('admin.master')
@section('content-admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Manage Blogs</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin.dashboard">Home</a></li>
                <li class="breadcrumb-item active">Blogs</li>
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
                <h3 class="card-title">Blogs</h3>
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
                                <th style="width: 15%"> Image </th>
                                <th style="width: 20%"> Title </th>
                                <th style="width: 30%"> Description </th>
                                <th  style="width: 10%">Author</th>
                                <th  style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $data)
                            <tr>
                                <td>{{ $data->blog_id }}</td>
                                <td>
                                    <img src="{{ asset('/img/blog/'.$data->blog_img) }}" alt=""><br/>
                                </td>
                                <td>
                                    {{ $data->blog_title }}
                                </td>
                                <td>
                                    {{ Str::words($data->blog_description,15) }}
                                </td>
                                <td>
                                    {{ $data->blog_author }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm product" href="/admin.editblog/{{ $data->blog_id }}">
                                        <i class="fas fa-pencil-alt"></i>
                                        Edit
                                    </a>
                                    <!-- <a onclick="return confirm('Bạn có chắc muốn xóa blog này không?')" class="btn btn-danger btn-sm" href="/deleteblog/{{ $data->blog_id }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </a> -->
                                    <form class="btn btn-danger btn-sm" method="POST" action="deleteblog/{{$data->blog_id}}" onsubmit="return confirm('Bạn Có Muốn Xóa Không?')">
                                    @method('DELETE')
                                    @csrf
                                    <i class="fas fa-trash">
                                        </i>
                                    <button style="background-color: #e74c3c;border:0" type="submit">Delete</button>
                                    </form>
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
