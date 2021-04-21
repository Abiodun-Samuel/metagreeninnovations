@component('mail::message')

<p> Dear {{$data['name']}},</p>


<p>Your message has been received and we will get back to you promptly.</p> 


<p>Go back to</p> 
@component('mail::button', ['url' => 'https://metagreeninnovations.com'])
Homepage
@endcomponent 

<p>Check out our recently completed </p> 
@component('mail::button', ['url' => 'https://metagreeninnovations.com/project'])
Projects
@endcomponent 



<p>Once again, Thanks for contacting us.
{{ config('app.name') }}
</p>
@endcomponent
