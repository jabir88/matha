@component('mail::message')
Hello {{$user->name}} .Thanks For Your Order.
<br>

@component('mail::button', ['url' => 'http://localhost:8000'])
Super Market
@endcomponent

Thanks,<br>
{{ config("Super Market") }}
@endcomponent
