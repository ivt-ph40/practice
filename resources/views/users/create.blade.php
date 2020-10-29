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
	<select name="birthday[]">
		<option value="1991">1991</option>
		<option value="1992">1992</option>
		<option value="1993">1993</option>
	</select>
	<select name="birthday[]">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select>
	<select name="birthday[]">
		<option value="1">01</option>
		<option value="2">02</option>
		<option value="3">03</option>
	</select>
	<button type="submit">Add</button>
</form>