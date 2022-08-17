<?php
include("config.php");
if(isset($_POST['submit']))
{
    
	$name = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword= $_POST['confirmpassword'];
	// $result = mysqli_query("insert into user values('','$name','$email','$password','$confirmpassword')");
	// $sql = "insert into user values('','$name','$email','$password','$confirmpassword')";
	// $sql = "SELECT * FROM user";
	
	// if($result)
	// {
	// 	echo "Registration Successfully";
	// }
	// else{
	// 	echo "failed:";
	// }

	// if(mysqli_query($conn, $sql)){
	// 	echo "<h3> You Have Successfully signed up</h3>"; 
  
	// } else{
	// 	echo "ERROR: Hush! Sorry $sql. " 
	// 		. mysqli_error($conn);
	// }


	$query = mysqli_query($conn, "INSERT INTO `user`(`id`, `name`, `email`, `password`, `confirmpassword`) VALUES ('','$name','$email','$password','confirmpassword')");
echo '<script>alert("Thank You..! You have successfully signed up"); location.replace(document.referrer);</script>';

}
?>

