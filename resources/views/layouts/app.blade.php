<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.partials.head')

</head>


<body id="app-layout">

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')

    @include('layouts.partials.scripts')
    
</body>
</html>
