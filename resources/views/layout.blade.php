<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Laravel blog test</title>
        <link href="{{ asset('/css/all.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <!--<![endif]-->
        <!--
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/css/select2.min.css" rel="stylesheet" />
        -->
    </head>
    <body>
        @include('partials.nav')
    	</nav>


        <div class="container">
            @include('flash::message')

            @yield('content')
        </div>
        <script src="{{ asset('/js/all.js') }}"></script>


        @yield('footer')

        <script>
            $('#flash-overlay-modal').modal();
            //$('div.alert').not('.alert-important').delay(3000).slideUp();

        </script>

         <script type="text/javascript">
        /* <![CDATA[ */
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
        /* ]]> */
        </script>
    </body>

</html>