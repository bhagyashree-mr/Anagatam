 <?php 
include("config.php");
$uname=$_POST['username'];
$password=$_POST['password'];
echo $uname; 

//    $host="localhost";
//    $user="root";
//    $password="";
//    $db="demo";
   
//    mysql_connect($host,$user,$password);
//    mysql_select_db($db);
//    $conn=mysqli_connect("localhost:3307", "root","", "demo");
   if(isset($_POST['username'])){
       
       $uname=$_POST['username'];
       $password=$_POST['password'];
       
       $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
       
    //    $result=mysqli_query($sql);
       $result = $conn->query($sql);
       
    //    if(mysqli_num_rows($result)==1){
        if ($result->num_rows > 0) {
           echo " You Have Successfully Logged in";
           exit();
       }
       else{
           echo " You Have Entered Incorrect Password";
           exit();
       }
           
   }

   ?>
   