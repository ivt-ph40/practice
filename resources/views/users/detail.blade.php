<h1>Detail user</h1>
<p>{{$user->username}}</p>
<p>{{$user->email}}</p>
<p>{{$user->address}}</p>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Title</td>
		</tr>
	</thead>
	<tbody>
		<!-- 10 bai post -> chạy 10 câu query lấy image -->
		@foreach($user->posts as $post)
			<tr>
				<td>{{$post->id}}</td>
				<td>{{$post->title}}</td>
				@foreach($post->images as $image) 
				<!-- //1 query -->
					<img src="{{$image->path}}">
				@endforeach
			</tr>
		@endforeach
	</tbody>
</table>