<div class="post-detail">
	<h2>{{ $post->title }}</h2>
	<hr>
	<h5>Post Photos</h5>
	<ul>
		@foreach($post->photos as $photo)
			<li>
				{{ $photo->path }}
			</li>
		@endforeach
	</ul>
	<hr>
	<h5>Post Tags</h5>
	<ul>
		@foreach($post->tags as $tag)
			<li>
				{{ $tag->name }}
			</li>
		@endforeach
	</ul>
	<hr>
	<p>{{ $post->content }}</p>
	<hr>
	<h5>Posted By: {{ $post->user->name }}</h5>
</div>
