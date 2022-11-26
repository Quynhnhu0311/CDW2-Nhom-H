@extends('admin.master')
@section('content-admin')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Manage Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Edit Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.container-fluid -->

        <!-- Main content -->
        <section class="content">
            @foreach($blogs as $data)
            <form action="/admin.updateblog/{{ $data->blog_id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Blog</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Blog Title</label>
                                    <input type="text" id="inputTitle" value="{{ $data->blog_title }}" class="form-control" name="blog_title" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputPrice">Blog Description</label>
                                        <input type="textarea" id="inputDescription" class="form-control" name="blog_description" value="{{ $data->blog_description }}">
                                    
                                </div>
                                <div class="form-group qty">
                                    <label for="inputAuthor">Author</label>
                                    
                                        <input type="text" min="1" id="inputAuthor" class="form-control" name="blog_author" value="{{ $data->blog_author }}">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="inputImage">Blog Image</label>
                                    <input type="file" id="inputImage" class="form-control" name="product_img">
                                    <img src="{{ asset('/img/blog/'.$data->blog_img) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input name="submit" type="submit" value="Update Blog" class="btn btn-success float-center">
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
