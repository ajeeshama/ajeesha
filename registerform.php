<?php
 include("config.php");
$link=$db;
//check connection
if($link==false){
  die("ERROR:could not correct. ".mysqli_connect_error());
}
$username=$_post['username'];
$cn=$_post['college name'];
$deg=$_post['degree'];
$reppas =$_post['repeat password'];
$eml=$_post['email'];
$bra=$_post['branch'];
$psd=$_post['password'];
//attemt insert guery execution 
$sql="INSERT INTO register('username','college name','degree','repeat password','email','branch','password')VALUES
     values($name,$cn,$deg,$repas,$eml,$bra,$pad);
if(Mysqli-query($db,$sql)){
   echo"Records addea successfully:";
}else{
 echo"ERROR:could not able to execute
$sql.".Mysqli_error($link);
}
//close connection
mysqli_close($link);
?>
