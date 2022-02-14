<?php
$host="localhost";
$user="root";
$pass="";
$db="test";
$coon= mysqli_connect($host,$user,$pass ,$db);
if($coon){
 echo"connect";
}
else{
echo "not connect";
}
    
?>