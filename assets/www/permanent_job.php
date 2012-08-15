 <?php
require_once('header.php');
?>	
<body>
	<div data-role="page" id="job_vacancy">
		<div data-role="header" data-position="fixed">  
			<a href='/' data-rel="back" data-icon="back">Back</a>
		 	<h1>JobChannel.com.my </h1>
			 	<?php
			if($logged_in == false){ 
				echo"<a href='login.php' data-role='button' data-icon='plus' class='ui-btn-right'>Login</a>";
			} else{
				echo"<a href='login.php' data-role='button' data-icon='plus' class='ui-btn-right'>Logout</a>"; 
			}
			?> 
			<div data-role="navbar">
				<ul> 
					<li><a href='freelance_job.php'>Freelance</a>
					<li><a class="ui-btn-active"  href='permanent_job.php'>Permanent</a></li> 

				</ul>
			</div>
   		</div>	 
		<div data-role="content">   
			<ul data-role="listview">
				<?php 
					$job_vacancy = array(
						'0'	=> array('job_title'=>'Web developer','job_field'=>'IT','post_date'=>'11/12/2011','company_name'=>'Shell','required_skill'=>'PHP,SQL','location'=>'Klang Valley'), 
						'1'	=> array('job_title'=>'Web developer','job_field'=>'IT','post_date'=>'11/12/2011','company_name'=>'Shell','required_skill'=>'PHP,SQL','location'=>'Klang Valley'),  
					); 
				
					foreach($job_vacancy as $k => $v){
						echo"<li><a href='job_content.php'><h1>".$v['job_title']."</h1><p>".$v['required_skill']."</p><p>".$v['company_name']." - ".$v['job_field']."</p><p class='ui-li-aside''>".$v['post_date'].'<br/>'.$v['location']."</p></a> </li>";
					}
						?>
				  
				
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