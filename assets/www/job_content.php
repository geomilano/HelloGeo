 <?php
require_once('header.php');
?>	
<body>
 
	<div data-role="page" id="home">
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
		</div>
		<div data-role="content"> 
		<?php 
		$job_content = array(
			'0'	=>	array(
				'company_name'=>'Shell World Sdn Bhd',
				'job_title'=>'web developer',
				'location'=>'klang valley',
				'advertised_starting_date'=>'09-11-11',
				'advertised_closing_date'=>'09-11-11', 
				'job_description'=>"<ul><li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</li><li> but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li><ul>",
				'responsibilities'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
				'requirement'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
				'benefit'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
				'longtitude'=>'101.677036',
				'latitude'=>'3.120976',
			),
		); 
		foreach($job_content as $k => $v){
			echo"<dl title='job_content'>
					<dd><a href='company_details.php'><h2>".$v['company_name']."</h2></a></dd>
					<dt>job_title</dt><dd>".$v['job_title']."</dd>
					<dt>location</dt><dd><a href='gps_map.php?la=".$v['latitude']."&lo=".$v['longtitude']."'>".$v['location']."</a></dd>
					 
					<dt>Job Description</dt><dd>".$v['job_description']."</dd> 
					<dt>Responsibilities</dt><dd>".$v['responsibilities']."</dd>
					<dt>Requirement</dt><dd>".$v['requirement']."</dd>
					<dt>Benefit </dt><dd>".$v['benefit']."</dd>
					<dt>Advertised on/Ending on</dt><dd>".$v['advertised_starting_date']."/".$v['advertised_closing_date']."</dd>
				</dl>";
			}
			
			echo "<br/><a data-role='button' href='#'>Apply</a>";
		?> 
			 
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
