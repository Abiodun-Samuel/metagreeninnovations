@component('mail::message')

New Message From {{$data['name']}}

Name: {{$data['name']}} 

Email: {{$data['email']}}

Phone: {{$data['phone']}}

Subject: {{$data['subject']}}

Message: {{$data['message']}}


@component('mail::button', ['url' => 'mailto:' . $data['email']])
Reply
@endcomponent

@component('mail::button', ['url' => 'tel:' . $data['phone']])
Call
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
