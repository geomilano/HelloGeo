<?php 
require_once('header.php');
$error =''; 
if(isset($_POST['register_usr_name'])){ 
	/*$_POST['register_usr_name']; 
	$_POST['register_password']; 
	if('yc' == $_POST['usr_name']&& '123' == $_POST['password']){ 
		$_SESSION['usr_name'] = $_POST['register_usr_name'];   
		$_SESSION['logged_in'] = TRUE;  
	}else{
		$error = 'Invalid username or password combination';
	} */
}
  
?>
 
<div data-role="page" id="register">
		<div data-role="header"  data-position="fixed">  
			<a href='/' data-rel="back" data-icon="back">Back</a>
		 	<h1>JobChannel.com.my </h1> 
		</div>  
		
		<?php echo "<span style='color:red;'>".$error."</span>";?>
		<div data-role="content">  
			<form action="register.php" method="POST">
				<fieldset>
					<div data-role="fieldcontain">
						<label for="register_usr_name">Member ID/Email:</label>
						<input type="text" name="register_usr_name" id="register_usr_name" value=""  /> 
					</div> 
					<div data-role="fieldcontain">
						<label for="register_password">Password:</label>
						<input type="text" name="register_password" id="register_password" value=""  /> 
					</div> 
					<button type="submit" id='register' data-theme="a">Register</button> 
				</fieldset> 
			</form>  
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
<body>
</html>