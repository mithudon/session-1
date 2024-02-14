<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email']) && strpos($_POST['email'], '@') !== false) {
    $_SESSION['email'] = strip_tags($_POST['email']);
} else {
    // Redirect back to the email form if '@' is not found in the email
    header("Location: email.php");
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
        <?php 
              echo "Email is ". $_SESSION['email'];
              echo "Name is ". $_SESSION['name'];
        ?>
        <form action="summary.php" method="POST">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
