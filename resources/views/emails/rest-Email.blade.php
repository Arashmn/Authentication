@component('mail::message')
# Reset Password 

The body of your message.

@component('mail::button', ['url' => $link])
Send Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}    
@endcomponent
