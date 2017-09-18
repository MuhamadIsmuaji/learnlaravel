<div class="user-lists">
	<h3>User Lists</h3>
	<hr>
	<ul>
		@foreach($users as $user)
			<li>
				{{ $user->name }} | {{ $user->email }}
				<a href="{{ route('elrel.userposts', ['user_id' => $user->id]) }}">User Posts</a> ||
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
				{{ $post->title }}
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
