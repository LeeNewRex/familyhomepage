<?php
  $host = 'localhost';
  $user = 'root';
  $pw = '0907aass';
  $dbName = 'myService';
  $mysqli = new mysqli($host, $user, $pw, $dbName);

  $id=$_POST['id'];
  $addr=$_POST['email'];
  $pwd=md5($_POST['password']);
  $pwd=md5($_POST['password2']);

  $sql = 'insert into login_tb (id, email, pwd, pwd2)';
  $sql = $sql. "values('$id','$addr','$pwd','$pwd2')";
  if($mysqli->query($sql)){
    echo 'success signup';
    }else{
    echo 'fail to signup';
    echo mysqli_error($mysqli);
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <input type="button" value="Back Loginpage"/>
  </body>
</html>
