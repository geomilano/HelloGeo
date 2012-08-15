<?php  
$error ='';
 
 if(isset($_POST['log_out_name'])){ 
	setcookie("logged_in", "", time()-3600); 
	header( 'Location: login.php' ) ;
}
if(isset($_POST['usr_name'])){ 
	if('yc' == $_POST['usr_name']&& '123' == $_POST['password']){   
		setcookie("usr_name", $_POST['usr_name'], time()+60*60*24*30);
		setcookie("logged_in",TRUE, time()+60*60*24*30);    
		 header( 'Location: http://jobchannel.com.my/mockup/jcjqm/index.php' ) ;
	}else{
		$error = 'Invalid username or password combination';
	} 
}  
  
require_once('header.php');
?>
 <?php  
 if( $_COOKIE['logged_in'] == TRUE ){
 ?>
 
<div data-role="page" id="login">
		<div data-role="header"  data-position="fixed">  
			<a href='/' data-rel="back" data-icon="back">Back</a>
		 	<h1>JobChannel.com.my </h1> 
		</div>  
		
		<?php echo "<span style='color:red;'>".$error."</span>";?>
		<div data-role="content">  
			<form action="login.php" method="POST"> 
				<p>
					 <input type="hidden" name="log_out_name" id="log_out_name" value=""  /> 
				</p>  
				<button type="submit" id='logout' data-theme="a">Logout</button>  
			</form>
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
 <?php
 }else{
 ?>
<div data-role="page" id="login">
		<div data-role="header">  
			<a href='/' data-rel="back" data-icon="back">Back</a>
		 	<h1>JobChannel.com.my </h1> 
		</div>  
		
		<?php echo "<span style='color:red;'>".$error."</span>";?>
		<div data-role="content">  
			<form action="login.php" method="POST">   
					<p>
						<label for="usr_name">Member ID/Email:</label>
						<input type="text" name="usr_name" id="usr_name" value=""  /> 
					</p> 
					<p>
						<label for="password">Password:</label>
						<input type="text" name="password" id="password" value=""  /> 
					</p> 
					<button type="submit" id='login' data-theme="a">Login</button>  
			</form> 
					<a data-role='button' href='register.php' >Register</a> 
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
	
	<?php }?>
	
<body>
</html>