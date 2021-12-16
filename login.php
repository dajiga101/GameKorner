<?php 
	include('variables.php');
	include('credentials.php');
 ?>
<?php 
	$errors = ['email'=>'','password'=>''];
	$email=$password='';
 ?>

<?php 
	 if(isset($_POST['submit'])){
	 	if(empty($_POST['email'])){
	 		$errors['email']='An email is required';
	 	}
	 	else{
	 		$email=$_POST['email'];
	 		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	 			$errors['email']="Invalid email ";
	 		}
	 		else{
	 			$global_email=$email;
	 			echo $global_email;
	 		}
	 	}
	 	if(empty($_POST['password'])){
	 		$errors['password']='A password is required';
	 	}
	}
	if(!array_filter($errors)){
		session_start();
		$_SESSION['varname'] = $global_email;
	 	//sleep(5);
	 	//$errors=[];
	 	header('Location: user_profile.php');

	 }
?>


 <!DOCTYPE html>
 <html>
 <head>
 	<?php 
 		include('templates/header.php');

 	 ?>
 	 <section class = "container grey-text">
 	 	<h4 class = "center">Login </h4>
 	 	<form class = "white " action="login.php" method = "POST" >
 	 		<label>Email</label>
 	 		<input type="text" name="email" value ="<?php echo $email; ?>">
 	 		<section class = red-text>
 	 			<?php 
 	 				echo ($errors['email']);
 	 			 ?>
 	 		</section>

 	 		<label>Password</label>
 	 		<input type="password" name="password">
 	 		<section class = red-text>
 	 			<?php 
 	 				echo ($errors['password']);
 	 			 ?>
 	 		</section> 	 		
 	 		<div class=" center">
 	 			<input type="submit" name="submit" value = "submit" class ="btn company z-depth-0">	
 	 		</div>
 	 	</form>
 	 </section>	
 	 <?php 
 		include('templates/footer.php');

 	 ?>


 </html>