<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"> 
	<meta name="HandheldFriendly" content="true" /> 
	<meta name="apple-mobile-web-app-capable" content="yes" /> 
	<meta http-equiv="cleartype" content="on">
	<title>iQuestion</title>
		<link rel="stylesheet" type="text/css" href="jquery.mobile-1.0b2.min.css" />
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="jquery-1.6.2.min.js"></script>

		<script type="text/javascript" src="jquery.mobile-1.0b2.min.js"></script>
		<script type="text/javascript" src="jquery.ui.map.full.min.js"></script>
		<script type="text/javascript" src="jquery.ui.map.extensions.js"></script>
	 
<script type="text/javascript"> 
				$('#map').live("pageshow", function() {
				$('#map_canvas_1').gmap('refresh');
				$('#map_canvas_1').gmap('getCurrentPosition', function(position, status) {
					if ( status === 'OK' ) {
						var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
						$('#map_canvas_1').gmap('get', 'map').panTo(latlng);
						$('#map_canvas_1').gmap('search', { 'location': latlng }, function(results, status) {
							if ( status === 'OK' ) {
								$('#from').val(results[0].formatted_address);
							}
						});
					} else {
						alert('Unable to get current position');
					}
				});
			});
			
			$('#map').live("pagecreate", function() {
				$('#map_canvas_1').gmap({'center': '59.3426606750, 18.0736160278'});
				$('#submit').click(function() {
					$('#map_canvas_1').gmap('displayDirections', { 'origin': $('#from').val(), 'destination': $('#to').val(), 'travelMode': google.maps.DirectionsTravelMode.DRIVING }, { 'panel': document.getElementById('directions')}, function(response, status) {
						if ( status === 'OK' ) {
							$('#results').show();
						} else {
							$('#results').hide();
						}
					});
					return false;
				});
			});
 
		</script> 
	 <style> 
			 dl>dt{
			 padding:5px;
			 background-color:white;
			 }
			 dd{
			 
			 padding:5px;
			 margin-left:-3px;
			 }
			 dt{ 
			 width:100%;
			 background-color:red;
			 }
	 </style>
</head>

<body>
<body>
	<div id="map" data-role="page"> 
		<div data-role="header" data-add-back-btn="true" data-position="fixed">  
			<a href='index.php' data-rel="back" data-icon="back">Back</a>
		 	<h1>Geo Map </h1>
				<a href='login.php' data-role='button' data-icon='plus' class='ui-btn-right'>Login</a>
		</div>
			<div data-role="content">	
				<div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
					<div id="map_canvas_1" style="height:300px;"></div>
					<p>
						<label for="from">From</label>
						<input id="from" class="ui-bar-c" type="text" value="" />

					</p>
					<p>
						<label for="to">To</label>
						<input id="to" class="ui-bar-c" type="text" value="" />
					</p>
					<a id="submit" href="#" data-role="button" data-icon="search">Get directions</a>
				</div>
				<div id="results" class="ui-listview ui-listview-inset ui-corner-all ui-shadow" style="display:none;">

					<div class="ui-li ui-li-divider ui-btn ui-bar-b ui-corner-top ui-btn-up-undefined">Results</div>
					<div id="directions"></div>
					<div class="ui-li ui-li-divider ui-btn ui-bar-b ui-corner-bottom ui-btn-up-undefined"></div>
				</div>
			</div>
		<div data-role="footer" data-position="fixed">  
			<div data-role="navbar">
				<ul>
	<li><a data-ajax='false' href='index.php' >Home</a></li>
				<li><a data-ajax='false' href='gps_map.php' data-transition='slide'>GPS</a></li>
				<li><a data-ajax='false' href='salary_calculator.php' data-transition='slide'>Salary Calculator</a></li>
				</ul>
			</div>
		</div>
	</div>
	  
</body>
</html>