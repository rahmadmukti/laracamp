<x-mail::message>
# Welcome

Hi, {{$user->name}}
<br>
Welcome to Laracamp, your account has been created successfully. Now you can choose your best match camp!

<x-mail::button :url="$url" color="success">
Login Here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
