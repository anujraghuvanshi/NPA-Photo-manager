<html lang="en">
<!DOCTYPE html>
    <head>
        <title>NPA Photo Manager</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome') }}.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/nexus.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">

        <meta property="og:url"           content="{{ env('APP_URL') }}/infographic_share" />
        <meta property="og:type"          content="npa" />
        <meta property="og:title"         content="npa" />
        <meta property="og:description"   content="NPA Photo Manager" />
        <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

    </head>
    <body>
    <div id="body-bg">
        @include('admin.partials.social-links')

        <div id="pre-header" class="container" style="height:20px"></div>

        @include('admin.partials.header')
        @include('admin.partials.nav-bar')

        <div id="post_header" class="container" style="height:10px"></div>
        <div id="content-top-border" class="container"></div>

        @yield('content')
        
        <div id="content-bottom-border" class="container"></div>

    </div>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lightbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.visible.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('js/slimbox2.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
    </body>
</html>