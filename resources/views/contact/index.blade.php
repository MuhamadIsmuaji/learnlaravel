@extends('layouts.app')


@section('content')

<div class="row">
	<h4>Contact Lists</h4>
	<div class="contact-lists">
		<ul>
			@foreach($contacts as $contact)
				<li>
					<a href="/contact/{{ $contact['id'] }}/{{ $contact['name'] }}/detail">{{ $contact['name'] }}</a>
				</li>
			@endforeach
		</ul>
	</div>
</div>

@endsection
