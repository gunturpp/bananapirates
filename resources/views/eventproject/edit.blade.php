@extends('layouts/layout')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="pull-right" style="margin-top:15px;">
                        <a class="btn btn-primary" href="{{ route('eventproject.index') }}"> Back</a>
                    </div>
                    <div class="col-lg-12">
                        <center><h1 class="page-header">Edit Event / Project Data</h1></center>
                    </div>
            </div>
            {{--  <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('homestays.index') }}"> Back</a>
            </div>  --}}
        </div>
    </div>

    <div style="width: 80%; margin: auto;">
        <div style="text-align:center">
            <img style="width:500px" src="{{ URL::to('/') }}/images/eventproject/{{$event_projects->pictures}}">
        </div>
        <br>
        
      	<table class="table centered">
            {!! Form::model($event_projects, ['method' => 'PATCH','route' => ['eventproject.update', $event_projects->id], 'files'=>true]) !!}
                @include('eventproject.form')
            {!! Form::close() !!}
        </table>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection