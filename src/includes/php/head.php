<?php
$hostname = $GLOBALS['config']['APP_HOSTNAME'];
$port = $GLOBALS['config']['APP_PORT'];
$path = $GLOBALS['config']['APP_ROOT_PATH'];
$base = "http://" . $hostname . ":" . $port . "/" . $path;
?>

<base href="<?php echo $base; ?>"/>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="eHOSP - Hospital Platform in the Cloud">
<meta name="keywords" content="eHOSP,Cloud,Hospital,">
<meta name="author" content="Alex Karadimos">

<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/custom.css" />
<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>

<script src="js/vendor/modernizr.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/vendor/jquery-ui.css">
<script src="js/vendor/jquery-ui.js"></script>
