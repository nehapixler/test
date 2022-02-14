<?php
include"connection.php";

if(isset($_POST['sub'])){
$sql='SELECT * FROM `reg`';
$res=mysqli_query($coon,$sql);
//$result=mysqli_fetch_array($res);

$uname=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$pass=md5($password);

$fav_language=$_POST['fav_language'];
$vehicle=$_POST['vv'];
 $vehicle=implode(',',$vehicle);
$state=$_POST['state'];




 $insert = "INSERT INTO `reg`( `u_name`, `email`, `pass`,`hobbies`, `fav_language`, `state`)VALUES('$uname','$email','$pass','$vehicle',
 '$fav_language','$state')";
        $res = mysqli_query($coon,$insert) ;
            if(mysqli_error($coon)){
            $errord=mysqli_error($coon);
            echo  $errord ;
            }else{
                echo"success  full insert";
            }

    }

?>
<html>
    <head></head>
  <body>
     <form   method="post">
   <input type="text"  placeholder="enter user name" name="name"  required /><br><br>
   <input type="email"  placeholder="enter your email" name="email" required /><br><br>
   <input type="password"  placeholder="enter your password" name="password" required /><br><br>
   <select name="state">
        <option value="up">up</option>
        <option value="bihar">bihar</option>
        <option value="punjab">punjab</option>
    </select><br><br>
    <input type="radio" id="html" name="fav_language" value="HTML">
    <label for="html">HTML</label><br>
    <input type="radio" id="css" name="fav_language" value="CSS">
    <label for="css">CSS</label>

    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
    <label for="javascript">JavaScript</label><br><br>
   <input type="checkbox" id="vehicle1" name="vv[]" value="Bike">
   <label for="vehicle1"> I have a bike</label><br>
    <input type="checkbox" id="vehicle2" name="vv[]" value="Car">
   <label for="vehicle2"> I have a car</label><br>
   <input type="checkbox" id="vehicle3" name="vv[]" value="Boat">
  <label for="vehicle3"> I have a boat</label><br> <br>
    <button type="submit" name="sub">submit </button>

  </form>
  </body>
</html>