@component('mail::message')
# {{ $msgTitle }}

{{ $msgBody }}

{{ $msgGoodbye }},<br>
{{ config('app.name') }}
@endcomponent
