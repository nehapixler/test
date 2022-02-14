
<html>
<head><head>
    <body>
      <a href="http://localhost/test/logout.php"><button type="button"> logout</button></a>
    <table>
       <thead>
        <tr>
            <th>id</th>
            <th>email</th>
            <th>hobbies</th>
            <th>gender</th>
            <th>state</th>
        </tr>
     <thead>
   

<?php
include"connection.php";
$sql='SELECT * FROM `reg`';
$res=mysqli_query($coon,$sql);
while($row=mysqli_fetch_array($res))
{ 
  $id= $row['id'];
  $u_name= $row['u_name'];
  $email= $row['email'];
  
  $hobbies= $row['hobbies'];
  $fav_language= $row['fav_language'];
  $state= $row['state'];
   ?>
    <tbody>
     <tr>
     <td><?php echo $id;  ?><td>
     <td><?php echo $u_name;  ?><td>
     <td><?php echo $email;  ?><td>
     <td><?php echo $hobbies;  ?><td>
     <td><?php echo $fav_language; ?><td>
      <td><?php echo $state; ?><td>
     </tr></tbody>

<?php
}
?>
  </table>
</body>

</html>