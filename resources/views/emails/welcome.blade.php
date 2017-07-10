@component('mail::message')
# Welcome to eHOSP

Welcome to eHOSP, the hospital on the cloud, 
an online platform for e-health and e-medicine!

@component('mail::button', ['url' => 'ehosp.azurewebsites.net'])
Get started
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
