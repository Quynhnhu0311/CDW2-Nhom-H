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
              <li class="breadcrumb-item active">Protype</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if(session()->has('status'))
            <div class="alert text-alert">
                {{ session()->get('status') }}
            </div>
            <?php session()->forget(['status']); ?>
            @elseif(session()->has('message_update'))
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
          <h3 class="card-title">Protypes</h3>

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
                      <th style="width: 20%"> Name </th>
                      <th  style="width: 30%">Quantity</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($protypes as $row => $protypes)
                  <tr>
                      <td>{{$protypes->type_id}}</td>
                      <td><a>{{$protypes->type_name}}</a><br/></td>
                      <td><a>{{$protypes->type_qty}}</a><br/></td>
                      <td class="project-actions text-right">
                      <a class="btn btn-info btn-sm" href="admin.editprotype/{{$protypes->type_id}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <form class="btn btn-danger btn-sm" method="POST" action="deleteprotype/{{$protypes->type_id}}" onsubmit="return confirm('B???n C?? Mu???n X??a Kh??ng?')">
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