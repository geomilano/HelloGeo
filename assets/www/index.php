 <?php
require_once('header.php');
?>	
<body>
 
	<div data-role="page" id="home">
		<div data-role="header" data-position="fixed">  
		 	<h1>iQuestion </h1>
			<?php
			if($logged_in == false){ 
				echo"<a href='login.php' data-role='button' data-icon='plus' class='ui-btn-right'>Login</a>";
			} else{
				echo"<a href='login.php' data-role='button' data-icon='plus' class='ui-btn-right'>Logout</a>"; 
			}
			?>    
		</div>
		<div data-role="content"> 

			<ul data-role='listview' data-inset='true'>
				<li data-role='list-divider'>Menu</li> 
				<li><a href='gps_map.php'>GPS</a></li> 
				<li><a href='salary_calculator.php'>Setting</a></li> 
			</ul>
			 

		</div>
		<div data-role="footer" data-position="fixed">  
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
