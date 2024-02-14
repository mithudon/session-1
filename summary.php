<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST" AND !empty($_POST['phone'])){
    $_SESSION['phone']=$_POST['phone'];
}
elseif(empty($_POST['phone'])){
    header("location: phone.php");
    exit;
}
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo "Name is ". $_SESSION['name'];
              echo "Email is ". $_SESSION['email'];
              echo "Phone Number is ". $_SESSION['phone'];
        ?>
    </body>
</html>
