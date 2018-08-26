<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Today List</title>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{asset('css/login-todaylist.css')}}"  media="screen,projection"/>

    </head>
    <body class="cyan">
        <div id="login-page" class="row">
            <div class="col z-depth-4 card-panel">
                <div class="row row-login">
                    <div class="input-field col s12">
                        <a href="{{ url('auth/redirect/google') }}" class="btn waves-effect waves-light col s12">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</html>
