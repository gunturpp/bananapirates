<!DOCTYPE html>
<html>
@include('layouts.admin-header')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event & Project
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">eventproject</li>
      </ol>
    </section>
 
    <section class="content">
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>eventproject list</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('eventproject.create') }}"> Create New eventproject</a>
                        {{-- <a class="btn btn-success" href="#"> Create New eventproject</a> --}}
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>title</th>
                    <th>picture</th>
                    <th>content</th>
                    <th>link</th>
                    <th width="280px">Action</th>
                </tr>
            @foreach($event_projects as $eventproject)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $eventproject->title}}</td>
                <td><img src="{{ URL::to('/') }}/images/eventproject/{{ $eventproject -> pictures }}" style="height:50px;width:50px;text-align:center"></td>
                <td>{{ $eventproject->content}}</td>
                <td><a href="https://{{ $eventproject->link_registration}}">{{ $eventproject->link_registration}}</a></td>
                <td>
                    <a class="btn btn-info" href="{{ route('eventproject.show',$eventproject->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('eventproject.edit',$eventproject->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['eventproject.destroy', $eventproject->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            </table>
            
            {!! $event_projects->links() !!}
    </section>
</div>

@include('layouts.admin-footer') 
</body>
</html>
