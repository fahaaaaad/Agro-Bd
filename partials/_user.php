<?php
////    selecting the use  ////
$admin = false;
$staff = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){
  //$LoginId = $_SESSION['loginID'];
  $sql = "SELECT * FROM `login` WHERE `username` = '{$_SESSION['username']}'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if($num == 1){
    $staff = true; //teacher
  }
  elseif($num == 0){
    $sql = "SELECT * FROM `alogin` WHERE `username` = '{$_SESSION['username']}'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
      $admin = true; //driver
    }
  }
} 
?>