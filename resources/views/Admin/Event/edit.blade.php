@extends('layouts.master')
@section('content-header')

<h6>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('sentence.Home')</a></li>
            <li class="breadcrumb-item"><a href="{{route('Event.index')}}">@lang('sentence.Events')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('sentence.Edit')</li>
        </ol>
    </nav>
</h6>

@endsection
@section('content')

<div class="card card-outline card-success">
    <div class="card-header">
      <h3 class="card-title"> <i class="fa fa-edit"></i> @lang('sentence.Edit Event')</h3>
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
        <form method="POST" action="{{ route('Event.update',$Event) }}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row custom-form edit">
                <div class="col-6">
                    <div class="form-group row mr-2">
                        <label for="title" class="col-sm-6 col-form-label">
                            @lang('sentence.Title')<span class="star">*</span>
                        </label>
                        <input type="text" class="form-control" name="title" id="title" required autocomplete="off" 
                        placeholder="@lang('sentence.Title')" value="{{ $Event->title }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row mr-2">
                        <label for="date" class="col-sm-6 col-form-label">
                            @lang('sentence.Date')<span class="star">*</span>
                        </label>
                        <input type="date" class="form-control" name="date" id="date" required autocomplete="off" 
                        placeholder="@lang('sentence.Date')" value="{{ $Event->date }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group row mr-2">
                        <label for="description" class="col-sm-6 col-form-label">
                            @lang('sentence.Description')<span class="star">*</span>
                        </label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="5"
                        required placeholder="@lang('sentence.Description')">{{ $Event->description }}</textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row mr-2">
                        <label for="tickets" class="col-sm-6 col-form-label">
                            @lang('sentence.Tickets')<span class="star">*</span>
                        </label>
                        <input type="text" class="form-control" name="tickets" id="tickets" required autocomplete="off" 
                        placeholder="@lang('sentence.Tickets')" value="{{ $Event->tickets }}" maxlength="19">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row mr-2">
                        <label for="price" class="col-sm-6 col-form-label">
                            @lang('sentence.Price')<span class="star">*</span>
                        </label>
                        <input type="text" class="form-control" name="price" id="price" required autocomplete="off" 
                        placeholder="@lang('sentence.Price')" value="{{ $Event->price }}" maxlength="20">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row mr-2">
                        <label for="location" class="col-sm-6 col-form-label">
                            @lang('sentence.Location')<span class="star">*</span>
                        </label>
                        <input type="text" class="form-control" name="location" id="location" required autocomplete="off" 
                        placeholder="@lang('sentence.Location')" value="{{ $Event->location }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row mr-2">
                        <label for="image" class="col-sm-6 col-form-label">
                            @lang('sentence.Image')
                        </label>
                        <input type="file" class="form-control" name="image" id="image"  autocomplete="off" 
                        placeholder="@lang('sentence.Image')" value="{{ $Event->image }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group row mr-2">
                        <label for="inputPassword3" class="col-sm-6 col-form-label"></label>
                        <input type="submit" class=" form-control btn btn-success btn-flat btn-block" value="@lang('sentence.Edit')"> 
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
