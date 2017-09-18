<div class="video-detail">
	<h2>{{ $video->name }}</h2>
	<hr>
	<h5>Video Tags</h5>
	<ul>
		@foreach($video->tags as $tag)
			<li>
				{{ $tag->name }}
			</li>
		@endforeach
	</ul>
</div>
