<?php
session_start();
if($_SERVER["REQUEST_METHOD"]== "POST" AND !empty($_POST['name'])){
    $_SESSION['name']=$_POST['name'];
}
elseif (empty($_POST['name'])){
    header("location: index.php");
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
        <?php echo "Welcome".$_SESSION['name'] ?>
        <form action="phone.php" method="POST">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
