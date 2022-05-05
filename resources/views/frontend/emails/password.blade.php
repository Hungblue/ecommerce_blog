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
    # Reset Password

    Your six-digit PIN is <h4>{{ $pin }}</h4>
    <p>Please do not share your One Time Pin With Anyone. You made a request to reset your password. Please discard if
        this wasn't you.</p>

    Thanks,<br>
    {{ config('app.name') }}
    {{-- @endcomponent --}}
</body>

</html>
