@extends('layouts.admin')

@section('content')
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
                        <h3 class="box-title">Course List</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Action</th>
                        </tr>

                        @foreach( $courses as $course )
                            <tr>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->start_date }}</td>
                                <td>{{ $course->end_date }}</td>
                                <td>{{ $course->start_time }}</td>
                                <td>{{ $course->end_time }}</td>
                                <td> Edit / Delete</td>
                            </tr>
                        @endforeach
                    </table>
                </div><!-- /.box -->

            </div>
        </div>

@stop