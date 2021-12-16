<?php 
include('credentials.php');
 ?>
<?php 
	$errors = ['firstname'=>'','lastname'=>'','email'=>'','phonenumber'=>'','password'=>''];
	$firstname=$lastname=$email=$phonenumber=$password='';
 ?>

<?php 
	 if(isset($_POST['submit'])){
	 	if(empty($_POST['firstname'])){
	 		$errors['firstname']='A firstname is required';
	 	}else{
	 		$firstname=$_POST['firstname'];
	 		$global_name=$firstname;
	 	}

	 	if(empty($_POST['lastname'])){
	 		$errors['lastname']='A lastname is required';
	 	}else{
	 		$lastname=$_POST['lastname'];
	 	}

	 	if(empty($_POST['email'])){
	 		$errors['email']='An email is required';
	 	}
	 	else{
	 		$email=$_POST['email'];
	 		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	 			$errors['email']="Invalid email ";
	 		}
	 		// else{
	 		// 	$global_email=$email;
	 		// 	echo $global_email;
	 		// }

	 	}

	 	if(empty($_POST['phonenumber'])){
	 		$errors['phonenumber'] = 'A phone number is required';
	 	}

	 	else{
	 		$phonenumber = $_POST['phonenumber'];
			if(!preg_match('/^[0-9]{10}+$/', $phonenumber)) {
				$errors['phonenumber']="Invalid number ";
			}
	 	}
	 	if(empty($_POST['password'])){

	 		$errors['password']='A password is required';
	 	}
	 	else{
	 		$password=$_POST['password'];
	 	}
	 }
	 if(!array_filter($errors)){

	 	$sql="INSERT INTO customers (firstName,lastName,phoneNumber,emailAddress, password) VALUES ('$firstname','$lastname','$phonenumber','$email','$password')";
		if(!mysqli_query($conn,$sql)){
		 	//success
		 	
			echo 'query error';
		 }
		 else{


			header('Location: new_user_profile_page.php');
		 }
		

		 	// sleep(2);
	 	// header('Location: index.php');
	 }

	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<?php 
 		include('templates/header.php');

 	 ?>
 	 <section class = "container grey-text">
 	 	<h4 class = "center black-text">Sign-Up</h4>
 	 	<form class = "white" action="add_user.php" method = "POST" >
 	 		<label>First Name</label>
 	 		<input type="text" name="firstname" value = '<?php echo $firstname ?>' >
 	 		<section class = red-text>
 	 			<?php 
 	 				echo ($errors['firstname']);
 	 			 ?>
 	 		</section>

 	 		<label>Last Name</label>
 	 		<input type="text" name="lastname" value = "<?php echo $lastname ?>">
 	 		<section class = red-text>
 	 			<?php 
 	 				echo ($errors['lastname']);
 	 			 ?>
 	 		</section>

 	 		<label>Email</label>
 	 		<input type="text" name="email" value="<?php echo "$email" ?>">

 	 		<section class = red-text>
 	 			<?php 
 	 				echo ($errors['email']);
 	 			 ?>
 	 		</section>

 	 		<label>Phone Number</label>
 	 		<input type="text" name="phonenumber" value  = "<?php echo "$phonenumber" ?>">

 	 		<section class = red-text>
 	 			<?php 
 	 				echo ($errors['phonenumber']);
 	 			 ?>
 	 		</section>

 	 		<label>Password</label>
 	 		<input type="password" name="password" value = '<?php echo $password ?>' >
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