@extends('layouts/layout')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="pull-right" style="margin-top:15px;">
                        <a class="btn btn-primary" href="{{ route('eventproject.index') }}">Back</a>
                    </div>
                    <div class="col-lg-12">
                        <center><h1 class="page-header">Event & Project Data Detail</h1></center>
                    </div>
            </div>
            {{-- <div class="container-fluid">
                <div class="row">
                    <div class="pull-right" style="margin-top:15px;">
                        <a class="btn btn-primary" href="{id}/addCategory">Add Category</a>
                    </div>
            </div> --}}
            {{--  <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('homestays.index') }}"> Back</a>
            </div>  --}}
        </div>
    </div>

    <div style="width: 80%; margin: auto;">
      	<table class="table centered">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title :</strong>
                        {{ $event_projects->title}}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title :</strong>
                        <a href="https://{{ $event_projects->link_registration}}">{{ $event_projects->link_registration}}</a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Content :</strong>
                        {{ $event_projects->content}}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Picture :</strong>
                        <img src="{{ URL::to('/') }}/images/eventproject/{{ $event_projects -> pictures }}" style="text-align:center">
                    </div>
                </div>

            </div>
        </table>
    </div>

@endsection