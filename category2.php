<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


	
<html>
<head>
<link href="css/category1.css" rel="stylesheet">
<style>
#mainMenu td:hover {
	width:10px;
	text-align:center;
	padding:0px;
	background-color:#FFA500;
}
</style>
</head>
<body>
<div class="inner-banner-w3ls">
		<div class="container">
			<!-- page details -->
			<div class="breadcrumb-agile">
				<div aria-label="breadcrumb">
					
				</div>
			</div>
			<!-- //page details -->
		</div>
	</div>
	<section >
		<div >
			<h3 class="tittle text-center text-uppercase text-dark font-weight-bold mb-sm-5 mb-4">Category</h3>
	
				 <div class="container">
				<div class="row">				
				<table>
				<tbody>
						<?php	
						$con=mysqli_connect("localhost","root","","db_ecommerce");
				  		$query = "SELECT tendername FROM tendercategory ORDER BY tendername ASC  ";
						
						
						if($result=$con->query($query))
							
						{	
						$numrow=mysqli_num_rows($result);
						$r=$numrow%3;
						$count1=0;
						$count=0;
						
						
							$fieldname1;
							$fieldname2;
							$fieldname3;
							$fieldname4;
							$fieldname5;
							$fieldname6;
							while($row=$result->fetch_assoc()){
								$count++;
								$count1++;
								$fieldname=$row["tendername"];
								if($count==1){
									$fieldname1=$fieldname;
								}
								if($count==2){
									$fieldname2=$fieldname;
								}
								if($count==3){
									
									$fieldname3=$fieldname;
									echo '<tr id="mainMenu">
									
								<td><a href="'.web_root. 'index.php?q=tendermenu&id='.$fieldname1.' ">'.$fieldname1.'</a></td>
								<td><a href="'.web_root. 'index.php?q=tendermenu&id='.$fieldname2.' ">'.$fieldname2.'</a></td>
								<td><a href="'.web_root. 'index.php?q=tendermenu&id='.$fieldname3.' ">'.$fieldname3.'</a></td>
								</tr>'
							;
							$count=0;
								}
								if($r==1 and $count1==$numrow){
									$fieldname4=$fieldname;
									echo '<tr id="mainMenu"><td><a href="'.web_root. 'index.php?q=tendermenu&id='.$fieldname4.' ">'.$fieldname4.'</a></td></tr>';
								}
								if($r==2 and $count1==$numrow-1){
									$fieldname5=$fieldname;
									
								}
								if($r==2 and $count1==$numrow){
									$fieldname6=$fieldname;
									echo '<tr id="mainMenu"><td><a href="'.web_root. 'index.php?q=tendermenu&id='.$fieldname5.' ">'.$fieldname5.'</a></td>
											<td><a href="'.web_root. 'index.php?q=tendermenu&id='.$fieldname6.' ">'.$fieldname6.'</a></td></tr>';
								}
								
								
							}
							$result->free();
						}
						?>
				  		</tbody>
					</table>

				
				</div>
				</div>
    </div>
  </section><!--/slider-->

	<!-- footer -->
	</body>
	</html>