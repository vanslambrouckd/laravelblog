<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Laravel blog test</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <style type="text/css">
        body {
            padding-top:50px;
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Laravel test</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="/articles">Articles</a></li>
                    <li><a href="/articles/create">Create article</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </nav>

        <div class="container">
            @yield('content')
            <footer>
                @yield('footer')
            </footer>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        
         <script type="text/javascript">
        /* <![CDATA[ */
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
        /* ]]> */
        </script>
    </body>

</html>