@extends('layouts.master')
@section('content-header')
<h6>
    <a href="{{ route('Organizer.create') }}" class="btn btn-secondary btn-flat add"> 
        <i class="fa fa-plus"></i> @lang('sentence.Add Organizer')
    </a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('sentence.Home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('sentence.Organizers')</li>
        </ol>
    </nav> 
</h6>
@endsection
@section('content')
    @if (count($Organizers) == 0)
        <div class="row empty">
            <div class="col-4 mt-5">
                <p class="mt-5">
                    @lang('sentence.Here You Can Add, Edit ,Delete Organizers.')
                </p>    
            </div>
            <div class="col-8">
                <img src="{{ asset('images/Events-amico.png') }}" width="100%" height="400px" alt="{{ __('Events-amico.png') }}">
            </div>  
        </div>
    @else
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-list"></i> @lang('sentence.Organizers List')</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">   
                <div class="table-responsive">
                    <table class="table table-hover datatable">
                        <thead class="bg-info">
                            <tr>
                                <th>@lang('sentence.#ID')</th>
                                <th>@lang('sentence.Name')</th>
                                <th>@lang('sentence.Email')</th>
                                <th>@lang('sentence.Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Organizers as $v=>$Organizer)
                                <tr>
                                    <td>{{ $v+1 }} </td>
                                    <td>{{ $Organizer->name }}</td>
                                    <td>{{ $Organizer->email }}
                                    <td style="display: flex;">
                                        <a class="btn btn-info  btn-sm" href="{{route('Organizer.show',$Organizer->id)}}">
                                            <i class="fa fa-eye"></i> 
                                        </a>
                                        <a class="btn btn-success  btn-sm" href="{{route('Organizer.edit',$Organizer->id)}}">
                                            <i class="fa fa-edit"></i> 
                                        </a>
                                        <form method="POST" action="{{route('Organizer.destroy',$Organizer->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger  btn-sm confirm">
                                                <i class="fa fa-trash"></i> 
                                            </button>
                                        </form> 
                                    </td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif

@endsection
