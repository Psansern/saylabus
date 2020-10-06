@extends('main.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Laravel 5.8 CRUD Example</h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('faculty.create') }}"> Create New Blog</a>
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
<th>Title</th>
<th>Content</th>
<th width="280px">Action</th>
</tr>
@foreach ($blogs as $blog)
<tr>fa
<td>{{ $blog->title }}</td>
<td>{{ $blog->content }}</td>
<td>
<form action="{{ route('facaluty.destroy',$blog->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('faculty.show',$blog->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('faculty.edit',$blog->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection
