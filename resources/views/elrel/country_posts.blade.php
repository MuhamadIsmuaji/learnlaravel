<div class="country-posts">
	<h2>{{ $country->name }} Posts</h2>
	<hr>
	<ul>
		@foreach($country->posts as $post)
			<li>
				{{ $post->title }} - Posted By: {{ $post->user->name }}
			</li>
		@endforeach
	</ul>
</div>
