<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
    @if (isset($title))
        {{ $title }}
    @else
        eHOSP
    @endif
</title>

<meta name="description" content="eHOSP is a hospital that runs in the Cloud and executes physical tasks with Robotics. It aims to be a complete smart platform to improve healthcare and well-being with new technologies such as wearables, IoT, drones, Artificial Intelligence and of course Robotics">
<meta name="keywords" content="eHOSP, Cloud, Hospital,">
<meta name="author" content="Alex Karadimos">
<meta name="theme-color" content="#2bb673">
<meta name="msapplication-TileColor" content="#2bb673">

<meta property="og:title" content=@if (isset($title)) "{{ $title }}" @else "eHOSP" @endif />
<meta property="og:url" content="{{url('/')}}" />
<meta property="og:description" content="eHOSP is a hospital that runs in the Cloud and executes physical tasks with Robotics. It aims to be a complete smart platform to improve healthcare and well-being with new technologies such as wearables, IoT, drones, Artificial Intelligence and of course Robotics" />
<meta property="og:type" content="website" />
<meta property="og:image" content=@if (isset($meta_image)) "{{ $meta_image }}" @else "/img/share.jpg" @endif />
<meta property="og:site_name" content="eHOSP" />

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@eHOSP_Cloud" />
<meta name="twitter:title" content=@if (isset($title)) "{{ $title }}" @else "eHOSP" @endif />
<meta name="twitter:description" content="eHOSP is a hospital that runs in the Cloud and executes physical tasks with Robotics. It aims to be a complete smart platform to improve healthcare and well-being with new technologies such as wearables, IoT, drones, Artificial Intelligence and of course Robotics" />
<meta name="twitter:creator" content="@eHOSP_Cloud" />
<meta name="twitter:image" content="/img/share.jpg" />


<link rel="manifest" href="/manifest.json">

<!-- Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">

<!-- Styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>

@yield('headExtra')
