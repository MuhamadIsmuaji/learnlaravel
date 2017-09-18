<div class="user-roles">
	<h2>{{ $user->name }} Roles</h2>
	<hr>
	<ul>
		@foreach($user->roles as $role)
			<li>
				{{ $role->name }}
			</li>
		@endforeach
	</ul>
</div>
