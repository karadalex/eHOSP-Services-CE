<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @if (isset($title))
            {{ $title }}
        @else
            eHOSP VR
        @endif
    </title>

    <meta name="description" content="eHOSP - VR">
    <meta name="keywords" content="eHOSP, Cloud, Hospital, VR">
    <meta name="author" content="Alex Karadimos">
    <meta name="theme-color" content="#2bb673">
    <meta name="msapplication-TileColor" content="#2bb673">
    <link rel="manifest" href="/manifest.json">

    <script src="{{config('app.cdn.eu').'/js/aframe/0-6-1'}}" crossorigin="anonymous"></script>
</head>


<body id="app-layout">

    @yield('content')

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-103518497-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>