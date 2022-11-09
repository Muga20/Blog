<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <!-- Css -->


    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    @yield('head')

  

<body>
    <div id="wrapper">
        <!-- header -->
        @yield('header')

        <!-- sidebar -->
        <div class="sidebar">
            <span class="closeButton">&times;</span>
            <p class="brand-title"><a href="">Blog</a></p>

            <div class="side-links">
                <ul>
                    <li><a class="{{ Request::routeIs('welcome.index') ? 'active' : '' }}"
                            href="{{ route('welcome.index') }}">Home</a></li>
                    <li><a class="{{ Request::routeIs('blog.index') ? 'active' : '' }}"
                            href="{{ route('blog.index') }}">Blog</a></li>
                
             
                    @guest
                        <li><a class="{{ Request::routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                        </li>
                        <li><a class="{{ Request::routeIs('register') ? 'active' : '' }}"
                                href="{{ route('register') }}">Register</a></li>
                    @endguest

                    @auth
                        <li><a class="{{ Request::routeIs('dashboard') ? 'active' : '' }}"
                                href="{{ route('dashboard') }}">Dashboard</a></li>
                    @endauth
                </ul>
            </div>

         
        </div>
        <!-- Menu Button -->
        <div class="menuButton">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <!-- main -->
        @yield('main')

    
      
    </div>


    <!-- Click events to menu and close buttons using javaascript-->
    <script>
        document
            .querySelector(".menuButton")
            .addEventListener("click", function() {
                document.querySelector(".sidebar").style.width = "100%";
                document.querySelector(".sidebar").style.zIndex = "5";
            });

        document
            .querySelector(".closeButton")
            .addEventListener("click", function() {
                document.querySelector(".sidebar").style.width = "0";
            });
    </script>
    @yield('scripts')
</body>

</html>
