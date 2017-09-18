<div class="user-photos">
	<h2>{{ $user->name }} Photos</h2>
	<hr>
	<ul>
		@foreach($user->photos as $photo)
			<li>
				{{ $photo->path }}
			</li>
		@endforeach
	</ul>
</div>
