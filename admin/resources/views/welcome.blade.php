@extends('adminlte::page')

@section('title', 'Welcome')

@section('content_header')
    <h1>Welcome to Your Application</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Getting Started</h3>
                </div>
                <div class="box-body">
                    <p>Welcome to the AdminLTE powered Laravel application! Get started by exploring the links and features in the sidebar.</p>
                    <p>If you are ready, you can begin by setting up your application, creating users, and adding content to your dashboard.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Section 1</h3>
                </div>
                <div class="box-body">
                    <p>Details or actions related to section 1.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Section 2</h3>
                </div>
                <div class="box-body">
                    <p>Details or actions related to section 2.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Section 3</h3>
                </div>
                <div class="box-body">
                    <p>Details or actions related to section 3.</p>
                </div>
            </div>
        </div>
    </div>
@stop
