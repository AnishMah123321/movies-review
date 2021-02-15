@component('mail::message')
# Here is the movie review you just created.
# Movie Title:
 {{$movie->heading}}
# Movie review:
{{$movie->information}}

@component('mail::button', ['url' => url('/members/successlogin/')])
Check out your review
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
