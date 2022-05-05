<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- @component('mail::message') --}}
    # Email Verification

    Thank you for signing up.
    Your six-digit code is {{ $pin }}

    Thanks,<br>
    {{ config('app.name') }}
    {{-- @endcomponent --}}
</body>

</html>
