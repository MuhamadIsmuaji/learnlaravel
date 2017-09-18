<div class="role-detail">
	<h2>Role {{ $role->name }} Detail</h2>
	<hr>
	<ul>
		@foreach($role->users as $user)
			<li>
				{{ $user->name }} - {{ $user->email }}
			</li>
		@endforeach
	</ul>
</div>
