@component('mail::message')
# Hey Admin

From : {{$name}}
<br>
Email : {{$email}}
<br>
@component('mail::panel')
{{$msg}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
