@extends('admin.layout')


@section('main')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ $message->name }}'s message</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Show message content</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                @include('admin.inc.messages')
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Show message</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-hover text-nowrap">
                            <tbody>
                              <tr>
                                <th>Name</th>
                                <td>{{ $message->name }}</td>
                              </tr>
                              <tr>
                                <th>Email</th>
                                <td>{{ $message->email }}</td>
                              </tr>
                              <tr>
                                <th>Subject</th>
                                <td>{{ $message->subject ?? "..." }}</td>
                              </tr>
                              <tr>
                                <th>Date</th>
                                <td>{{ $message->created_at }}</td>
                              </tr>
                              <tr>
                                <th>Body</th>
                                <td>{{ $message->body }}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>

                      <div class="card card-info">
                        <div class="card-header">
                          <h3 class="card-title">Respond Message</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('admin.inc.errors')
                        <form class="form-horizontal" method="POST" action="{{ url("dashboard/messages/respose/$message->id") }}">
                          @csrf
                            <div class="card-body">
                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="title" name="title">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputPassword3" class="col-sm-2 col-form-label">Body</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" placeholder="body" name="body"></textarea>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-success">Send Message</button>
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>  
                          </div>
                          <!-- /.card-footer -->
                        </form>
                      </div>




                </div>
            </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
   
@endsection
