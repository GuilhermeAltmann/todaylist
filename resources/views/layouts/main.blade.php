<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Today List</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/main.css')}}" media="screen,projection"/>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>
<body>
<nav class="cyan">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">TodayList</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="url('auth/logout')">Logout ({{Auth::user()->name}})</a></li>
        </ul>
    </div>
</nav>
@yield('content')
</body>
@yield('javascript')
</html>