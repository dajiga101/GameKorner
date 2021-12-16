 <?php 

	session_start();
	$var = $_SESSION['varname'];
	//echo $var;
 ?>

<?php 
	include('credentials.php');
	$sql="SELECT firstName, customer_ID FROM customers WHERE emailAddress ='$var'";
	$result=mysqli_query($conn,$sql);	
	$res=mysqli_fetch_all($result,MYSQLI_ASSOC);
	//print_r($res);
	$name=$res[0]['firstName'];
	$customer_ID=$res[0]['customer_ID'];


	//echo $name;

	$sql="SELECT FK_Game_ID FROM each_customer_purchase WHERE Fk_Customer_ID =$customer_ID";
	$result=mysqli_query($conn,$sql);	
	$res=mysqli_fetch_all($result,MYSQLI_ASSOC);
	//print_r($res);
	$game_ids=[];
	$game_name_to_genre=[];
	for($a=0;$a<count($res);$a++){
		$game_ids[]=$res[$a]['FK_Game_ID'];
	}

	foreach($game_ids as $game){
		$sql="SELECT Game_Name,Game_Type FROM games WHERE Game_ID ='$game'";
		$result=mysqli_query($conn,$sql);	
		$res=mysqli_fetch_all($result,MYSQLI_ASSOC);
		//print_r($res);

		$game_name_to_genre[$res[0]['Game_Name']]=$res[0]['Game_Type'];

	}
 ?>


<!DOCTYPE html>
 <html>
 <head>
 
 	<?php 
 		include('templates/header_login.php');

 	 ?>
 	 <h4 class="center grey-text">Your Games</h4>
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
 	 								<a class ="brand-text"href="">Exchange Game</a>
 	 								
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


 </html>

