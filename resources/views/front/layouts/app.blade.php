<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Educa - Education HTML Theme</title>


	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

	

	<link rel="stylesheet" href={{ asset("css/bootstrap.css")}}>
	<link rel="stylesheet" href={{ asset("css/animate.css")}}>
	<link rel="stylesheet" href={{ asset("css/jquery-ui.css")}}>
	<link rel="stylesheet" href={{ asset("css/simple-line-icons.css")}}>
	<link rel="stylesheet" href={{ asset("css/font-awesome.min.css")}}>
	<link rel="stylesheet" href={{ asset("css/icon-font.css")}}>
	<link rel="stylesheet" href={{ asset("css/educa.css")}}>

	<link rel="stylesheet" href={{ asset("rs-plugin/css/settings.css")}}>


</head>
<body>
    @yield('content')

    <script type="text/javascript" src={{ asset("js/jquery-1.11.1.min.js")}}></script>
	<script type="text/javascript" src={{ asset("js/bootstrap.min.js")}}></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src={{ asset("rs-plugin/js/jquery.themepunch.tools.min.js")}}></script>
    <script src={{ asset("rs-plugin/js/jquery.themepunch.revolution.min.js")}}></script>

	<script type="text/javascript" src={{ asset("js/plugins.js")}}></script>
	<script type="text/javascript" src={{ asset("js/custom.js")}}></script>
	


    {{-- script gmaps --}}
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>