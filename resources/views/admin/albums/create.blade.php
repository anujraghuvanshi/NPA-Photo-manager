@extends('admin.layouts.master')

@section('content')

@include('admin.partials.social-links')

<div id="pre-header" class="container" style="height:20px"></div>

@include('admin.partials.header')

@include('admin.partials.nav-bar')

<div id="post_header" class="container" style="height:10px"></div>
<div id="content-top-border" class="container"></div>
<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">
            <div class="col-md-6 col-md-offset-3">
                <div class="headline">
                    <center><h2>Create album</h2></center>
                </div>
                {!! Form::open(['route' => 'albums.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="row margin-bottom-20">
                <label>Title</label>
                    <div class="col-md-offset-0">
                        {{ Form::text('name', '', ['placeholder' => 'Album Name', 'class' => 'form-control']) }}
                    </div>
                </div>
                <div class="row margin-bottom-20">
                <label>Description</label>
                    <div class="col-md-offset-0">
                        {{ Form::textarea('description', '', ['placeholder' => 'Album Descrption', 'class' => 'form-control']) }}
                    </div>
                </div>
                <div class="row margin-bottom-20">
                <label>Cover Picture</label>
                    <div class="col-md-offset-0">
                        {{ Form::file('cover_image') }}
                    </div>
                </div>
                <div class="form-group row mb-0">
                    {{ Form::submit('Submit',['class' => 'btn btn-primary']) }}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div id="content-bottom-border" class="container"></div>

</div>
@endsection