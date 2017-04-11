<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		{!! MaterializeCSS::include_full() !!}
        {{ Html::style('css/dataTables.material.min.css') }}
        @yield('css')

	</head>
	<body>
        <header>
            <nav>
                <div class="nav-wrapper">
                    <a href="/" class="brand-logo">Logo</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">JavaScript</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <div class="container">
            @yield('content')
        </div>
        {!! MaterializeCSS::include_js() !!}
        {{ Html::script('js/jquery.dataTables.min.js') }}
        {{ Html::script('js/dataTables.material.min.js') }}
        @yield('js')
    </body>
</html>