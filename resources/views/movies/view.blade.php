{{-- @extends('layout')



@section('content')


<h1 class="title">{{ $movie->heading }}</h1>
 		<div class="content">{{ $movie->information }}</div>
          @if($movie->tasks->count())
          <div>
          	@foreach($movie->tasks as $task)
          	<li>{{ $task->information }}</li>
          	@endforeach

          </div>
         @endif
          <p>
          	<br/>
            <a href="/movies/{{ $movie->id }}/edit">Edit</a>
            </p>





@endsection --}}