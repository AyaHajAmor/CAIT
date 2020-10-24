    
@component('mail::message')

# Merci pour votre message !

<strong>Nom : </strong> {{ $data['name'] }}<br>
<strong>Email : </strong> {{ $data['email'] }}

<strong>Message : </strong>

{{ $data['msg'] }}
@endcomponent
