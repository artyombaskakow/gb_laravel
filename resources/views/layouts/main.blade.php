<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title')Страница@show</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<style>
    html,
    body {
        height: 100%;
    }
    .header{
        background: #563d7c;
        padding: 16px;
        text-transform: uppercase;
        color: white;
    }
    .wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100%;
    }
    .content {
        flex: 1 0 auto;
    }
    .footer {
        flex: 0 0 auto;
        background: #202429;
        color: white;
        padding: 40px;
    }
</style>
<body>
        <div class="wrapper">
            <header class="header">
                <div class="text-center">Laravel</div>
            </header>

            <div class="container-fluid content">
                @yield('menu')
                <div style="padding: 20px;">
                    @yield('content')
                </div>
            </div>

            <footer class="footer">
                <div class="text-center" style="color: #556377;">Copyright 2020</div>
            </footer>
        </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
