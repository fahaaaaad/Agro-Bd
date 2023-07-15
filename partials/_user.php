<?php
  ////    selecting the use  ////
  $admin = false;
  $staff = false;
  $funder = false;
  $farmer = false;
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
      elseif($num == 0){
        $sql = "SELECT * FROM `user` WHERE `username` = '{$_SESSION['username']}' AND `account_type` LIKE 'Funder' AND `verify` LIKE 'true'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
          $funder = true; //driver
        }
        elseif($num == 0){
          $sql = "SELECT * FROM `user` WHERE `username` = '{$_SESSION['username']}' AND `account_type` LIKE 'Farmer' AND `verify` LIKE 'true'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
          if($num == 1){
            $farmer = true; //driver
          }
        }
      }
    }
  } 
?>