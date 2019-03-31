<!DOCTYPE html>
<html >
<head>
    <!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-final2-1-122x86.png" type="image/x-icon">
    <meta name="description" content="">
    <title>User Viewer</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
    </style>

    <style type="text/css">
        .form-box{
            width: 400px;
            margin: 0 auto;
            margin-top: 100px;
        }

        textarea,input[type="text"]{
            width: 100%;
        }

        input[type="text"]{
            margin-bottom: 10px;
        }

        .label-check{
            margin-left: 15px;
        }

        input[type="submit"]{
            margin-bottom: 15px;
        }

        .registration{
            margin-bottom:50px;
        }

        iframe{
            width: 100%;
            height: 700px;
        }
    </style>


</head>
<body>
<div class="admin">
    <div class="nav navbar nav-brand"><h1><a href="index.html">IDAI AFRICA</a></h1>
        <nav class="nav navbar">
            <ul class="nav navbar">
                <li class="nav-link"><a href="#" class="item"></a></li>
                <li class="nav-link"><a href="#"></a></li>
                <li class="nav-link"><a href="#"></a></li>
                <li class="nav-link"><a href="#"></a></li>
                <li class="nav-link"><a href="#">Admin</a></li>
            </ul>
        </nav>
    </div>
</div>

<h3>My Google Maps Demo</h3>
<!--The div element for the map -->
<div id="map"></div>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat: -25.344, lng: 131.036};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR6czFVQ7GwtZhj7n0EXYH61sTHcy0Gi4&callback=initMap">
</script>


<script type="text/javascript">
    // api key AIzaSyAR6czFVQ7GwtZhj7n0EXYH61sTHcy0Gi4

</script>
<footer>
    <div class="copy text-center">copyright reserved to Idai Africa&copy;</div>
</footer>
</body>
</html>