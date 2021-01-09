@extends('layouts.master')
@section('content-header')
<h6>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">{{ trans('sentence.Home')}}</li>
        </ol>
    </nav>
</h6>
@endsection
@section('content')
<h5 class="mb-2">Info Box</h5>
<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
        
        <div class="info-box-content">
        <span class="info-box-text">@lang('sentence.Events')</span>
        <span class="info-box-number">1,410</span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-success"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
        <span class="info-box-text">@lang('sentence.Users')</span>
        <span class="info-box-number">410</span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="fa fa-sitemap"></i></span>

        <div class="info-box-content">
        <span class="info-box-text">@lang('sentence.Organizers')</span>
        <span class="info-box-number">13,648</span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

        <div class="info-box-content">
        <span class="info-box-text">@lang('sentence.Events')</span>
        <span class="info-box-number">93,139</span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection
