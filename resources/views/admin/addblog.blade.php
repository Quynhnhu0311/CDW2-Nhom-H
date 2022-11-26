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
                            <li class="breadcrumb-item active">Add Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.container-fluid -->

        <!-- Main content -->
        <section class="content">
            <form action="/admin.addblog" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Blog</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Blog Title</label>
                                    <input type="text" id="inputTitle" class="form-control" name="blog_title" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputDes">Blog Description</label>
                                        <input type="textarea" id="inputDescription" class="form-control" name="blog_description">
                                    
                                </div>
                                <div class="form-group qty">
                                    <label for="inputAuthor">Author</label>
                                    
                                        <input type="text" min="1" id="inputAuthor" class="form-control" name="blog_author">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="inputImage">Blog Image</label>
                                    <input type="file" id="inputImage" class="form-control" name="blog_img" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input name="submit" type="submit" value="Add Blog" class="btn btn-success float-center">
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
