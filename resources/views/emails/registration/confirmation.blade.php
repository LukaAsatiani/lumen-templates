@component('mail::message')

# Hello, {!!isset($name) ? $name : '<i style="color:crimson"><--Null--></i>'!!}.

<br>
Click the button below to activate your account
and complete your registration.
<br>
<br>

@component('mail::button', ['url' => isset($url) ? $url : '#', 'color'=>'green'])
Activate Account
@endcomponent

{{ config('app.name') }}
@endcomponent