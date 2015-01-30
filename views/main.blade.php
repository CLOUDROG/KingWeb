<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Welcome to King</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
                
        <link rel="stylesheet" href="{{ asset('site/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/960_24_col.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
        <script src="{{ asset('site/js/vendor/modernizr-2.6.2.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
       
        
        <header class="container_24">
            <h1><a href="/">KING</a></h1>
            <nav class="grid_17">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Rules</a></li>
                    <li><a href="#">Galery</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
            <menu>
                <ul id="headSocial">
                    <li><a href="#"><img src="{{ asset('site/img/icons/facebook.png') }}" alt="Facebook" /></a></li>
                    <li><a href="#"><img src="{{ asset('site/img/icons/dribble.png') }}" alt="Dribble" /></a></li>
                    <li><a href="#"><img src="{{ asset('site/img/icons/twitter.png') }}" alt="Twitter" /></a></li>
                    <li><a href="#"><img src="{{ asset('site/img/icons/youtube.png') }}" alt="Youtube" /></a></li>
                    <li><a href="#"><img src="{{ asset('site/img/icons/flickr.png') }}" alt="Flickr" /></a></li>
                    @if ( Auth::guest() )
                    <li><a href="/user/login"><button>Log in</button></a></li>
                    <li><a href="/user/register"><button>Register</button></a></li>
                    @else
                    <li><a href="/user/logout"><button>Logout</button></a></li>
                    @endif
                </ul>
              
            </menu>
            <form action="" method="get" class="grid_7">
                <p>
                    Search: <input type="text" name="search" id="search" placeholder="Search" />
                </p>
            </form>
        </header>
<!--******* content*************-->

    @yield('content')

<!--*******end content*************-->
        <div id="siteInfo" >
            <footer class="container_24">
                <p>© 2015 King All Rights Reserved</p>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Rules</a></li>
                        <li><a href="#">Galery</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </nav>
            </footer>
        </div>   
    </body>
</html>
