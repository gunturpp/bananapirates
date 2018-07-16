<!DOCTYPE html>
<html>
@include('layouts.admin-header')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        blog
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">blog</li>
      </ol>
    </section>
 
    <section class="content">
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>blog list</h2>
                    </div>
                    <div class="pull-right">
                        {{-- <a class="btn btn-success" href="{{ route('blog.create') }}"> Create New blog</a> --}}
                        <a class="btn btn-success" href="#"> Create New blog</a>
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
                    <th>content</th>
                    <th>Deskripsi blog</th>
                    <th>rating</th>
                    <th>Latitude</th>
                    <th>Latitude</th>
                    <th width="280px">Action</th>
                </tr>
            @foreach($blogs as $blog)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $blog->name_blog}}</td>
                <td><img src="{{ $blog -> poster }}" style="height:50px;width:50px;text-align:center"></td>
                <td>{{ $blog->description}}</td>
                <td>{{ $blog->rating}}</td>
                <td>{{ $blog->lat}}</td>
                <td>{{ $blog->long}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('blog.show',$blog->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['blog.destroy', $blog->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            </table>
            
            {!! $blogs->links() !!}
    </section>
</div>

@include('layouts.admin-footer') 
</body>
</html>
