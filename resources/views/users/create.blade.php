@extends('layouts.master')
@section('title', $title)

@section('content')
<h1>Create User:</h1>
<form action="{{route('users.store')}}" method="POST">
	@csrf
	<label>Name:</label>
	<input type="text" name="username">
	<label>Email:</label>
	<input type="text" name="email">
	<label>Password:</label>
	<input type="text" name="password">
	<label>Address:</label>
	<input type="text" name="address">
	<label>Country</label>
	<input type="text" name="country_id">
	<button type="submit">Add</button>
</form>

 @component('layouts.sign-up-button', ['key' => 'Button', 'key2' => 'Button 2'])
 	<strong>Detail user</strong>
 @endcomponent
@endsection

@section('footer')
<p>Footer</p>
@endsection