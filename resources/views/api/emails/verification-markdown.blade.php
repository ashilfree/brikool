@component('mail::message')
# Introduction

Hello from Markdown {{ $verification_code }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
