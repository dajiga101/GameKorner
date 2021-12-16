<?php 
	include('credentials.php')

 ?>
 <?php 

 	$sql="SELECT Game_Name,Game_Type FROM games";
	$result=mysqli_query($conn,$sql);	
	$res=mysqli_fetch_all($result,MYSQLI_ASSOC);
	//print_r($res);
	foreach($res as $result){
		$game_name_to_genre[$result['Game_Name']]=$result['Game_Type'];
	}
  ?> 


<!DOCTYPE html>
 <html>
 <head>
 
 	<?php 
 		include('templates/header_new_user.php');

 	 ?>
 	 <h4 class="center grey-text">Available Games</h4>
 	 <br>
 	 <br>
 	 <div class = "container">
 	 	<div class ="row">
 	 		<?php 
 	 			//print_r($game_name_to_genre);
 	 			foreach ($game_name_to_genre as $key => $value){?>
 	 				<div class="col s6 md3">
 	 					<div class="card">
 	 						<div class="card-content center">
 	 							<h5>
 	 								<?php echo $key ;?>
 	 							</h5>
 	 							<div>
 	 								<?php echo $value; ?>
 	 							</div>
 	 							<div class = "card-action center">
 	 								<a class ="brand-text"href="">Buy Game</a>
 	 								
 	 							</div>
 	 							
 	 						</div>
 	 						
 	 					</div>
 	 					
 	 				</div>
 	 				<?php } ?>
 	 			
 	 		 


 	 	</div>
 	 	
 	 </div>
 	 <?php 
 		include('templates/footer_login.php');

 	 ?>