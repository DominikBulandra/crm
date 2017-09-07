<!doctype html>
<html>
<head>
    @include('includes.head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
 <style>
            html, body {
                background-color: #fff9db;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .nagl {
               
                height: 50px;
                background-color: black;
               width: 100%;
            }

            #main {
               height: 80%;
                background-color: gray;

            }

            #lmenu {
              width: 200px;

            }

            #logos {
               
                background-color: purple;
                width: 250px;
                height: 50px;
                float: left;

            }
             #container {
               width: 90%;
               height: 1000px;
                background-color: yellow;
            }
            #sidebar {
                height: 100%;
                width: 250px;
                background-color: white;
            }
             #content {
                margin-top:50px;
                background-color: white;
            }
        </style>
<div class="container" id="container">
<div id="logos">
@include('includes.logo')
</div>

    <header id="header" class="nagl">
     
    @include('includes.header')
    </header>

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
