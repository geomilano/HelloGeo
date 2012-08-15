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
	<div data-role="page" id="home">
		<div data-role="header" data-position="fixed">  
			<a href='index.php' data-rel="back" data-icon="back">Back</a>
		 	<h1>Geo Calculator</h1>
			<a href='login.php' data-role='button' data-icon='plus' class='ui-btn-right'>Login</a>
		</div>
		<div data-role="content"> 
			<div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
		
			

					<fieldset>
						<div data-role="fieldcontain">
							<label for="monthly_salary">Monthly Salary:</label>
							<input type="text" name="monthly_salary" id="monthly_salary" value="" />
							<label for="result">Result:</label><div id="txt_content" name="txt_content"></div>				
						</div>
					</fieldset>
						<fieldset data-role="controlgroup">
							<legend>Minus Taxes:</legend>
							<input type="checkbox" name="socso" checked='checked' id="socso" class="custom" />
							<label for="socso">SOCSO - 1%</label>

							<input type="checkbox" name="epf" checked='checked' id="epf" class="custom" />
							<label for="epf">EPF - 11%</label>
	  
						</fieldset> 
					<button type="submit" id='login' data-theme="a" onClick='getSal()';>Calculate</button> 
	
			</div>
			<script>
	
	function getSal(){
			var total =0;
			var epf  = 0;
			var socso = 0;
      var sal = $("#monthly_salary").val();
      if ($('#epf').is(":checked"))
			{
				epf = sal* (11 /100);
			}
			
			if ($('#socso').is(":checked"))
			{
				socso = sal* (1 /100);
			}
			total = sal - epf - socso;
       jQuery('#txt_content').html(Math.round(total));

}
</script>

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
