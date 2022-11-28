@extends('admin.master')
@section('content-admin')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Manage Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.container-fluid -->

        <!-- Main content -->
        <section class="content">
            @foreach($edit_product as $row => $edit_product)
            <form action="/update-product/{{ $edit_product->product_id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Product</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            @if(session()->has('message_update'))
                                <div class="alert text-alert">
                                    {{ session()->get('message_update') }}
                                </div>
                                <?php session()->forget(['message_update']); ?>
                                @elseif(session()->has('message_err'))
                                <div class="alert alert-danger">
                                    {{ session()->get('message_err') }}
                                </div>
                                <?php session()->forget(['message_err']); ?>
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Product Name</label>
                                    <input type="text" id="inputName" value="{{ $edit_product->product_name }}" class="form-control" name="product_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputPrice">Product Price</label>
                                    <div class="group-price">
                                        <input type="number" id="inputPrice" class="form-control" name="product_price" value="{{ $edit_product->product_price }}">
                                        <input type="button" class="vnđ" value="VNĐ" disabled>
                                    </div>
                                </div>
                                <div class="form-group qty">
                                    <label for="inputClientCompany">Product Quantity</label>
                                    <div class="group-price">
                                        <input type="number" min="1" id="inputQty" class="form-control" name="product_qty" value="{{ $edit_product->product_qty }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Product Sold</label>
                                    <div class="group-price">
                                        <input type="number" min="1" id="inputQty" class="form-control" name="product_sold" value="{{ $edit_product->product_sold }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputManu">Manufacture</label><br>
                                    <select id="inputManu" class="form-control custom-select" name="manufacture">
                                        @foreach($manu_product as $key => $manu_product)
                                            @if($manu_product->manu_id == $edit_product->manu_id)
                                                <option selected value="{{ $manu_product->manu_id }}">{{ $manu_product->manu_name }}</option>
                                            @else
                                                <option value="{{ $manu_product->manu_id }}">{{ $manu_product->manu_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Protype</label><br>
                                    <select id="inputStatus" class="form-control custom-select" name="protype">
                                        @foreach($type_product as $key => $type_product)
                                            @if($type_product->type_id == $edit_product->type_id)
                                                <option selected value="{{ $type_product->type_id }}">{{ $type_product->type_name }}</option>
                                            @else
                                                <option value="{{ $type_product->type_id }}">{{ $type_product->type_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group description">
                                    <label for="inputDescription">Product Description</label>
                                    <textarea id="inputDescription" class="form-control" rows="4" name="product_description">{{ $edit_product->product_description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputImage">Product Image</label>
                                    <input type="file" id="inputImage" class="form-control" name="product_img">
                                    <img src="{{ asset('/img/product/'.$edit_product->product_img) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input name="submit" type="submit" value="Update Product" class="btn btn-success float-center">
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
