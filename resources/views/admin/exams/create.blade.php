@extends('admin.layout')

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add New Exam</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('dashboard/exams') }}">Exams</a></li>
                <li class="breadcrumb-item active">Add New</li>
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
                    <form method="POST" action="{{ url('dashboard/exams/store') }}" enctype="multipart/form-data" id="add-form">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Name (En)</label>
                                    <input type="text" name="name_en" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Name (Ar)</label>
                                    <input type="text" name="name_ar" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description (En)</label>
                            <textarea class="form-control" name="desc_en" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Description (Ar)</label>
                            <textarea class="form-control" name="desc_ar" rows="5"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Skill</label>
                                    <select class="custom-select form-control" name="skill_id">
                                        @foreach ($skills as $skill)
                                            <option value="{{ $skill->id }}">{{ $skill->name('en') }}</option> 
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="img">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Questions no.</label>
                                    <input type="text" name="questions_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Difficulty</label>
                                    <input type="text" name="difficulty" class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Duration Mins</label>
                                    <input type="text" name="duration_mins" class="form-control">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success" data-dismiss="modal">Submit</button>
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            </div>
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

