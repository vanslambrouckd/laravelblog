<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Laravel blog test</title>
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/bootstrap/js/tooltip.js"></script>
         <script type="text/javascript">
        /* <![CDATA[ */
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
        /* ]]> */
        </script>
    </body>

</html>