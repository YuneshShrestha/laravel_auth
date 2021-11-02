@component('mail::message')
# Hello Message

It's me yunesh.

@component('mail::button', ['url' => 'https://www.facebook.com/yunesh.shrestha.564'])
Link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
