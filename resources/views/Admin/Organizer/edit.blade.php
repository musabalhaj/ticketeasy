@extends('layouts.master')
@section('content-header')
<h6>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('sentence.Home')</a></li>
            <li class="breadcrumb-item"><a href="{{route('Organizer.index')}}">@lang('sentence.Organizers')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('sentence.Edit')</li>
        </ol>
    </nav>
</h6>
@endsection
@section('content')

<div class="card card-outline card-success">
    <div class="card-header">
      <h3 class="card-title"><i class="fa fa-edit"></i> @lang('sentence.Edit Organizer')</h3>
    </div>
    @if($errors->any())
        <div class="alert alert-danger mr-2 ml-2 mt-2">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                <li class="list-gorup-item">
                    {{ trans(''.$error.'')}}
                </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-body">
        <form method="POST" action="{{ route('Organizer.update',$Organizer) }}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row custom-form edit">
                <div class="col-12">
                    <div class="form-group row mr-2">
                        <label for="name" class="col-sm-6 col-form-label">
                            @lang('sentence.Name')<span class="star">*</span>
                        </label>
                        <input type="text" class="form-control" name="name" id="name" required autocomplete="off" 
                        placeholder="@lang('sentence.Name')" value="{{$Organizer->name}}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group row mr-2">
                        <label for="email" class="col-sm-6 col-form-label">
                            @lang('sentence.Email')<span class="star">*</span>
                        </label>
                        <input type="email" class="form-control" name="email" id="email" required autocomplete="off" 
                        placeholder="@lang('sentence.Email')" value="{{$Organizer->email}}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group row mr-2">
                        <label for="password" class="col-sm-6 col-form-label">
                            @lang('sentence.Password')
                        </label>
                        <input type="password" class="form-control" name="password" id="password" autocomplete="off" 
                        placeholder="@lang('sentence.Password')" value="{{old('password')}}" maxlength="10">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group row mr-2">
                        <label for="inputPassword3" class="col-sm-6 col-form-label"></label>
                        <input type="submit" class=" form-control btn btn-success btn-flat btn-block" value="@lang('sentence.Update')"> 
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
