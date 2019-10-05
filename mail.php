<?php

session_start();

$_SESSION['display']="";

if(isset($_POST['sendbtn'])){

    $name=$_POST['name'];
    $msg=$_POST['msg'];
    $email=$_POST['email'];
    $subject="web development";
    $to="avinashvarpeti1@gmail.com";
    $header="From:$name";
   if(empty($name)||empty($msg)||empty($email)){
       header("Location:index.php?empty_fields");
   } 
  else{
   if(mail($to,$subject,$msg,$header)){
     header("Location:index.php?mail=success");
     $_SESSION['display']="Thank you for sending Mail";
   }
   else{
    header("Location:index.php?mail=not_sent");
    $_SESSION['display']="There was an error sending mail!";
   }
}
}
?>