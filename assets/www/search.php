 <?php
require_once('header.php');
?>	
<body>
 
	<div data-role="page" id="home">
		<div data-role="header"  data-position="fixed">  
		 	<h1>JobChannel.com.my </h1>
			<?php
			if($logged_in == false){ 
				echo"<a href='login.php' data-role='button' data-icon='plus' class='ui-btn-right'>Login</a>";
			} else{
				echo"<a href='login.php' data-role='button' data-icon='plus' class='ui-btn-right'>Logout</a>"; 
			}
			?> 
		</div>
		<div data-role="content" > 
		<div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
			<form action="#" method="get">   
					<p>
						<label for="keyword" class="select">Keyword:</label>
						<input type="search" name="keyword" id="keyword" value="" placeholder="Looking for..."/> 
					</p>
					
					<p>
						<label for="location" class="select">Location:</label>
						<select name="location" id="location">
							<option value="KL">Kuala Lumpur</option>

							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>

							<option value="DE">Delaware</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>

							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option> 
						</select> 
					</p>
					<p>
						<label for="position_level" class="select">Position Level:</label>
						<select name="position_level" id="position_level"  data-native-menu="false">
							<option value="KL">Junior</option>

							<option value="AK">Senior</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
	 
						</select> 
					</p>
					<p>
						<label for="industry_field" class="select">Industry Field:</label>
						<select name="industry_field" id="industry_field"  data-native-menu="false">
							<option value="KL">IT</option>

							<option value="AK">Senior</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
	 
						</select> 
					</p>
					<button data-icon="search" type="submit" id='search' >Search</button>  
			</form> 
			</div>
		</div>
		<div data-role="footer"  data-position="fixed">  
			<div data-role="navbar">
				<ul>
				
					<?php   
						foreach($nav as $k => $v ){
							if($v['name'] == 'Map'){
								echo"<li><a data-ajax='false' href='".$v['url']."'>".$v['name']."</a></li>"; 
							}else{
								echo"<li><a href='".$v['url']."'>".$v['name']."</a></li>";
							}
						}  
					?> 
				</ul>
			</div>
		</div>
	</div>
	 
	 
</body>
</html>
