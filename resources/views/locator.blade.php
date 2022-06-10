<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lanre's Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        

                    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                    <!-- <link href="/css/app.css" rel="stylesheet"> -->
                    
                    <!-- style switcher css -->
                    <link href="{{ asset('css/skins/color-1.css') }}" rel="stylesheet" type="text/css" class="alternate-style" title="color-1">
                    <link href="{{ asset('css/skins/color-2.css') }}" rel="stylesheet" type="text/css" class="alternate-style" title="color-2" disabled>
                    <link href="{{ asset('css/skins/color-3.css') }}" rel="stylesheet" type="text/css" class="alternate-style" title="color-3" disabled>
                    <link href="{{ asset('css/skins/color-4.css') }}" rel="stylesheet" type="text/css" class="alternate-style" title="color-4" disabled>
                    <link href="{{ asset('css/skins/color-5.css') }}" rel="stylesheet" type="text/css" class="alternate-style" title="color-5" disabled>
                    <!-- <link href="/css/app/.css" rel="stylesheet"> -->

                    <script src="https://kit.fontawesome.com/7f86e9340c.js"></script>
                    <script src="{{ asset('js/main.js') }}" defer></script>
                    <!-- <script src="/resources/js/main.js"></script> -->
        <style>
            /* body {
                font-family: 'Nunito', sans-serif;
            } */
        </style>
    </head>
    <body class="dark">
        

        <!--- Header -->
        <header class="header">
            <div class="container">
                    <div class="row justify-content-between">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <!-- <img src="{{ asset('img/logo.png') }}" alt=""> -->
                                L
                            </a>
                        </div>
                        <div class="hamburger-btn outer-shadow hover-in-shadow">
                            <span></span>
                        </div>
                    </div>
            </div>
        </header>

        <!--- Navigation -->
        <nav class="nav-menu">
            <div class="close-nav-menu outer-shadow hover-in-shadow">&times;</div>
            <div class="nav-menu-inner">
                <ul>
                    <li><a href="#home" class="link-item inner-shadow active">Home</a></li>
                    <li><a href="#about" class="link-item outer-shadow hover-in-shadow">About</a></li>
                    <li><a href="#services" class="link-item outer-shadow hover-in-shadow">Services</a></li>
                    <li><a href="#portfolio" class="link-item outer-shadow hover-in-shadow">Portfolio</a></li>
                    <li><a href="#testimonial" class="link-item outer-shadow hover-in-shadow">Testimonial</a></li>
                    <li><a href="#contact" class="link-item outer-shadow hover-in-shadow">Contact</a></li>
                </ul>
            </div>

            <p class="copyright-text">&copy; 2022 L'Phi Hub</p>
        </nav>
        <div class="fade-out-effect"></div>
        <!--- Navigation menu end -->

        <!--- Map Content -->
            <div id="map">
                <section class="location">
                    <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8977152248194!2d3.2814459!3d6.534600499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8fa32398c311%3A0x2cc35b43c9141ba6!2s18%20Jamiu%20Raji%20St%2C%20Egbe%2C%20Lagos!5e0!3m2!1sen!2sng!4v1616770518121!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </section>
            </div>
        <!--- Map Content -->
        

        <!-- Style switcher start -->

        <div class="style-switcher outer-shadow">
            <div class="style-switcher-toggler s-icon outer-shadow hover-in-shadow">
               <i class="fas fa-cog fa-spin"></i>
            </div>
            <div class="day-night s-icon outer-shadow hover-in-shadow">
                <i class="fas"></i>
            </div>
            <h4>Themes</h4>
            <div class="colors">
               <span class="color-1" onclick="setActiveStyle('color-1')"></span>
               <span class="color-2" onclick="setActiveStyle('color-2')"></span>
               <span class="color-3" onclick="setActiveStyle('color-3')"></span>
               <span class="color-4" onclick="setActiveStyle('color-4')"></span>
               <span class="color-5" onclick="setActiveStyle('color-5')"></span>
            </div>


        </div>




    </body>
</html>
