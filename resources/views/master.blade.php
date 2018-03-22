<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scotch.io Guestbook</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-findcond">
            <div class="container">
                <div class="navbar-header">
                    <a href="{{ route('home') }}" class="navbar-brand">GuestBook</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="{{ route('sign') }}">Sign the GuestBook</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        @yield('content')

    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    
</body>
</html>