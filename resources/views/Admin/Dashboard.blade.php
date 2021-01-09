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

<div class="row">
    <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
        
        <div class="info-box-content">
        <span class="info-box-text">@lang('sentence.Events')</span>
        <a href="{{ route('Event.index') }}">
            <span class="info-box-number">{{ $Event }}</span>
        </a>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-success"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
        <span class="info-box-text">@lang('sentence.Users')</span>
        <a href="{{ route('User.index') }}">
            <span class="info-box-number">{{ $User }}</span>
        </a>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="fa fa-sitemap"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">@lang('sentence.Organizers')</span>
            <a href="{{ route('Organizer.index') }}">
                <span class="info-box-number">{{ $Orgnaizer }}</span>
            </a>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

@endsection
