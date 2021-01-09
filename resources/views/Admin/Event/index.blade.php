@extends('layouts.master')
@section('content-header')

<h6>
    <a href="{{ route('Event.create') }}" class="btn btn-secondary btn-flat add"> 
        <i class="fa fa-plus"></i> @lang('sentence.Add Event')
    </a>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('sentence.Home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('sentence.Events')</li>
        </ol>
    </nav> 
</h6>

@endsection
@section('content')

    @if (count($Events) == 0)
        <div class="row empty">
            <div class="col-4 mt-5">
                <p class="mt-5">
                    @lang('sentence.Here You Can Add, Edit ,Delete Events In Order To Make a Lot Of Money.')
                </p>    
            </div>
            <div class="col-8">
                <img src="{{ asset('images/Music festival-amico.png') }}" width="100%" height="400px" alt="{{ __('Music festival-amico.png') }}">
            </div>  
        </div>
    @else
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-list"></i> @lang('sentence.Events List')</h3>
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
                                <th>@lang('sentence.Title')</th>
                                <th>@lang('sentence.Tickets')</th>
                                <th>@lang('sentence.Price')</th>
                                <th>@lang('sentence.Date')</th>
                                <th>@lang('sentence.Organizer')</th>
                                <th>@lang('sentence.Status')</th>
                                <th>@lang('sentence.Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Events as $v=>$Event)
                                <tr>
                                    <td>{{ $v+1 }} </td>
                                    <td>{{ $Event->title }}</td>
                                    <td>{{ $Event->tickets }}</td>
                                    <td>{{ $Event->price }} @lang('sentence.SDG')</td>
                                    <td>{{Carbon\Carbon::parse($Event->date)->toFormattedDateString()}}</td>
                                    @foreach ($Users as $User)
                                        @if ($User->id == $Event->organizer_id)
                                            <td>{{ $User->name }}</td>
                                        @endif
                                    @endforeach
                                    <td>
                                        @if ($Event->status == 0)
                                            <span class="badge badge-danger">@lang('sentence.Pending')</span>
                                        @else
                                            <span class="badge badge-success">@lang('sentence.Done')</span>
                                        @endif
                                    </td>
                                    <td style="display: flex;">
                                        <a class="btn btn-info  btn-sm" href="{{route('Event.show',$Event->id)}}">
                                            <i class="fa fa-eye"></i> 
                                        </a>
                                        <a class="btn btn-success  btn-sm" href="{{route('Event.edit',$Event->id)}}">
                                            <i class="fa fa-edit"></i> 
                                        </a>
                                        <form method="POST" action="{{route('Event.destroy',$Event->id)}}">
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
