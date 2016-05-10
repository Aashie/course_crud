@extends('layouts.admin')

@section('content')

        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('postCreateCourse') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Course Category</label>
                            <select class="form-control" name="course_category_id">
                                @foreach( $courseCategories as $category)
                                    <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" placeholder="Enter Name" id="exampleInputEmail1" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Start Date</label>
                            <input type="text" placeholder="Start Date" id="exampleInputPassword1" class="form-control" name="start_date">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">End Date</label>
                            <input type="text" placeholder="End Date" id="exampleInputPassword1" class="form-control" name="end_date">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Start Time</label>
                            <input type="text" placeholder="Start Time" id="exampleInputPassword1" class="form-control" name="start_time">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">End Time</label>
                            <input type="text" placeholder="End TIme" id="exampleInputPassword1" class="form-control" name="end_time">
                        </div>
                    </div>

                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div><!-- /.box -->

           </div>
        </div>
@stop