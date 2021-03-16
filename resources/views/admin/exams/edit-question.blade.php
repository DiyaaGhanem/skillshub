@extends('admin.layout')

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Exam (Step 2)</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('dashboard/exams') }}">Exams</a></li>
                <li class="breadcrumb-item active">Edit Exam (Step 2)</li>
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
                <div class="col-12 pd-3">
                    @include('admin.inc.errors')
                    <form method="POST" action=" {{ url("dashboard/exams/update-questions/{$exam->id}/{$ques->id}") }} " id="add-form">
                        @csrf
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{ $ques->title }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Right Answer</label>
                                            <input type="text" name="right_ans" value="{{ $ques->right_ans }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Option 1</label>
                                            <input type="text" name="option_1" value="{{ $ques->option_1 }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Option 2</label>
                                            <input type="text" name="option_2" value="{{ $ques->option_2 }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Option 3</label>
                                            <input type="text" name="option_3" value="{{ $ques->option_3 }}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Option 4</label>
                                            <input type="text" name="option_4" value="{{ $ques->option_4 }}"  class="form-control">
                                        </div>
                                    </div>
                                </div>   
                                <hr>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success" data-dismiss="modal">Submit</button>
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
    
@endsection

