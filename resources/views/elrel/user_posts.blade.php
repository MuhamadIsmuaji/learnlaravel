<div class="post-lists">
	<h3>User Posts</h3>
	<hr>
	<ul>
		@foreach($posts as $post)
			<li>
				{{ $post->title }}
			</li>
		@endforeach
	</ul>
</div>
