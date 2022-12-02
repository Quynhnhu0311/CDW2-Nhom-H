@extends('admin.master')
@section('content-admin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Protypes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Comment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      @if(session()->has('message_update'))
            <div class="alert text-alert">
                {{ session()->get('message_update') }}
            </div>
            <?php session()->forget(['message_update']); ?>
      @endif
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Comment</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                          ID
                      </th>
                      <th style="width: 20%"> Product Name </th>
                      <th  style="width: 20%">Customer Name</th>
                      <th  style="width: 30%">Comment Content</th>
                      <th  style="width: 10%">Rating_Value</th>
                      <th  style="width: 10%;Text-align:center">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($comment as $data)
                  <tr>
                      <td>{{$data->comment_id}}</td>
                      <td>{{$data->product_name}}</td>
                      <td>{{$data->name}}<br/></td>
                      <td>{{$data->comment_content}}<br/></td>
                      <td>{{$data->rating_value}}<br/></td>
                      <td class="project-actions text-center">
                      
                          <form class="btn btn-danger btn-sm" method="POST" action="deletecomment/{{$data->comment_id}}"  onsubmit="return confirm('Bạn Có Muốn Xóa Không?')">
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