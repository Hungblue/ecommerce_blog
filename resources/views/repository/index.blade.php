<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($sites as $site)
        <p>{{ $site['id'] }}</p>
    @endforeach

    <h1>{{ $product['name'] }}</h1>
</body>

</html>
