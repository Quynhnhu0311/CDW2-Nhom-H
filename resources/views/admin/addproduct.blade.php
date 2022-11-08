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
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">products</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="/save-product" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New Product</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        @if(session()->has('message_add'))
                            <div class="alert text-alert">
                                {{ session()->get('message_add') }}
                            </div>
                            <?php session()->forget(['message_add']); ?>
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Product Name</label>
                                <input type="text" id="inputName" class="form-control" name="product_name" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPrice">Product Price</label>
                                <div class="group-price">
                                    <input type="number" id="inputPrice" class="form-control" name="product_price" required>
                                    <input type="button" class="vnđ" value="VNĐ" disabled>
                                </div>
                            </div>
                            <div class="form-group qty">
                                <label for="inputQty">Product Quantity</label>
                                <input type="number" min="1" value="1" id="inputQty" class="form-control" name="product_qty">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Product Description</label>
                                <input type="text" id="inputDescription" class="form-control" name="product_description" required>
                            </div>
                            <div class="form-group">
                                <label for="inputImage">Image</label>
                                <input type="file" id="inputImage" class="form-control" name="product_img" required>
                            </div>
                            <div class="form-group">
                                <label for="inputManu">Manufacture</label><br>
                                <select id="inputManu" class="form-control custom-select" name="manufacture">
                                    @foreach($getManufactures as $key => $getManufactures)
                                        <option value="{{ $getManufactures->manu_id }}">{{ $getManufactures->manu_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputType">Protype</label><br>
                                <select id="inputType" class="form-control custom-select" name="protype">
                                    @foreach($getProtypes as $key => $getProtypes)
                                        <option value="{{ $getProtypes->type_id }}">{{ $getProtypes->type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputFeature">Feature</label><br>
                                <select id="inputFeature" class="form-control custom-select" name="feature">
                                    @foreach($getFeatures as $key => $getFeatures)
                                        <option value="{{ $getFeatures->feature_id }}">{{ $getFeatures->feature_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input name="submit" type="submit" value="Create New Product" class="btn btn-success float-center">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
