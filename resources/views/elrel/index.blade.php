<div class="user-lists">
	<h3>User Lists</h3>
	<hr>
	<ul>
		@foreach($users as $user)
			<li>
				{{ $user->name }} | {{ $user->email }}
				<a href="{{ route('elrel.userposts', ['user_id' => $user->id]) }}">User Posts</a>
			</li>
		@endforeach
	</ul>
</div>

<div class="post-lists">
	<h3>Post Lists</h3>
	<hr>
	<ul>
		@foreach($posts as $post)
			<li>
				{{ $post->title }}
				<a href="{{ route('elrel.postdetail', ['post_id' => $post->id]) }}">Detail</a>
			</li>
		@endforeach
	</ul>
</div>
