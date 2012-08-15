  <?php
require_once('header.php');
?>	
<body>
<div data-role="page" id="user_dashboard">
		<div data-role="header">  
			<a href='/' data-rel="back" data-icon="back">Back</a>
		 	<h1>JobChannel.com.my </h1>
			 	<?php
			if($logged_in == false){ 
				echo"<a href='login.php' data-role='button' data-icon='plus' class='ui-btn-right'>Login</a>";
			} else{
				echo"<a href='login.php' data-role='button' data-icon='plus' class='ui-btn-right'>Logout</a>"; 
			}
			?>  
   		</div>	 
		<div data-role="content">  
			<ul data-role="listview"> 
				<li><a href='#'>Update Resume</a></li>
				<li><a href='#'>Up coming interview</a></li>
				<li><a href='#'>My favourite List</a></li>
				
			</ul>
		</div>
		<div data-role="footer">  
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
						
						if($logged_in == true){
							echo"<li><a href='user_dashboard.php'>".$usr_name."'s Page</a></li>";
						}
					?> 
				</ul>
			</div>
		</div>
	</div>
	
</body>
</html>