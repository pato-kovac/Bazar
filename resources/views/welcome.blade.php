<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bajoš</title>

    <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
</head>
<body style="padding: 20px 40px;">
    <header>
        @include('inc.header')

        @include('inc.product-card')

        @include('inc.product-container')

        @include('inc.footer')
    </header>
</body>
</html>