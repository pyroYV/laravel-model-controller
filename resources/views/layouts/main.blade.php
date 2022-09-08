<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title> @yield('title')</title>
</head>
<body>

    @include('includes.header')

    <main class="container">
        <div class="row g-4">

            @yield('home')
        </div>
    </main>
</body>
</html>
