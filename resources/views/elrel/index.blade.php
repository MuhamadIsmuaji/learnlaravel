<div class="user-lists">
	<h3>User Lists</h3>
	<hr>
	<ul>
		@foreach($users as $user)
			<li>
				{{ $user->name }} | {{ $user->email }}
				<a href="{{ route('elrel.userposts', ['user_id' => $user->id]) }}">User Posts</a> ||
				<a href="{{ route('elrel.userphotos', ['user_id' => $user->id]) }}">User Photos</a> ||
				<a href="{{ route('elrel.userroles', ['user_id' => $user->id]) }}">User Roles</a>
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
				{{ $post->title }} | Posted By: {{ $post->user->name }}
				<a href="{{ route('elrel.postdetail', ['post_id' => $post->id]) }}">Detail</a>
			</li>
		@endforeach
	</ul>
</div>

<div class="role-lists">
	<h3>Role Lists</h3>
	<hr>
	<ul>
		@foreach($roles as $role)
			<li>
				{{ $role->name }}
				<a href="{{ route('elrel.roledetail', ['role_id' => $role->id]) }}">Detail</a>
			</li>
		@endforeach
	</ul>
</div>

<div class="country-lists">
	<h3>Country Lists</h3>
	<hr>
	<ul>
		@foreach($countries as $country)
			<li>
				{{ $country->name }}
				<a href="{{ route('elrel.countryposts', ['country_id' => $country->id]) }}">Posts</a>
			</li>
		@endforeach
	</ul>
</div>

<div class="country-lists">
	<h3>Photo Lists</h3>
	<hr>
	<ul>
		@foreach($photos as $photo)
			<li>
				{{ $photo->path }}
				<a href="{{ route('elrel.photodetail', ['photo_id' => $photo->id]) }}">Detail</a>
			</li>
		@endforeach
	</ul>
</div>

<div class="video-lists">
	<h3>Video Lists</h3>
	<hr>
	<ul>
		@foreach($videos as $video)
			<li>
				{{ $video->name }}
				<a href="{{ route('elrel.videodetail', ['video_id' => $video->id]) }}">Detail</a>
			</li>
		@endforeach
	</ul>
</div>

<div class="tag-lists">
	<h3>Tag Lists</h3>
	<hr>
	<ul>
		@foreach($tags as $tag)
			<li>
				{{ $tag->name }}
				<a href="{{ route('elrel.tagdetail', ['tag_id' => $tag->id]) }}">Detail</a>
			</li>
		@endforeach
	</ul>
</div>
