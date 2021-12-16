<?php 

	global $var;
	$var="vvv";


 ?>
<?php 

	$conn=mysqli_connect('localhost','Daniel-Primary','Danaang965.','check');

	//check connection
	if(!$conn){
		echo "Connection Error" . mysqli_connect_error();
	}
	else{
		echo "gone thrrough start testing";
	}

	// $name="jiggy";

	//  $sql="INSERT INTO users (name) VALUES('$name')";

	//  if(mysqli_query($conn,$sql)){
	//  	//success
	//  }
	//  else{
	//  	//error
	//  	echo 'query error';
	//  }

	$sql="SELECT id FROM users";

	$result=mysqli_query($conn,$sql);

	
	$res=mysqli_fetch_all($result,MYSQLI_ASSOC);

	print_r($res) ;
	// echo"<br>";
	// $value=$res[0]['fk_user_id'];
	// echo $value;
	// echo"<br>";
	// $sql="SELECT name FROM users WHERE id =$value";
	// $result=mysqli_query($conn,$sql);
	// $res=mysqli_fetch_all($result,MYSQLI_ASSOC);

	// //print_r($res) ;
	// $value=$res[0]['name'];
	// echo $value;


 ?>
 <?php 


//  	sql="SELECT value FROM shop WHERE  fk_user_id = 1";


//  	function mysql_get_var($query,$y=0){
//        $res = mysql_query($query);
//        $row = mysql_fetch_array($res);
//        mysql_free_result($res);
//        $rec = $row[$y];
//        return $rec;
// }
// $name = mysql_get_var("");
//   echo $name;



  ?>