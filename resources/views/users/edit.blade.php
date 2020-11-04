@extends('layouts.master')
@section('title', $title)
@section('content')
<h1>Edit user id {{$user['id']}} : {{$user['name']}}</h1>
@if(Session::has('error'))
	<p style="color: red;">{{Session::get('error')}}</p>
@endif
<form action="{{route('users.update', $user['id'])}}" method="POST">
	@method('PUT')
	@csrf
	<label>Name:</label>
	<input type="text" name="name" value="{{$user['name']}}">
	<label>Address:</label>
	<input type="text" name="address" value="{{$profile['address']}}">
	<label>Tel:</label>
	<input type="text" name="tel" value="{{$profile['tel']}}">
	<button type="submit">Update</button>
</form>
@endsection