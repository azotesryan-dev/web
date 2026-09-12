<!DOCTYPE html>
<html lang="en">

<?php 

session_start();

$defaultUsername = "john123";
$defaultPassword = "metalgear";

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $USERNAME = $_POST["username"];
    $PASSWORD = $_POST["password"];

    if($defaultUsername == $USERNAME && $defaultPassword == $PASSWORD){
        $_SESSION   ["username"] = $defaultUsername;
        header("Location: dashboard.php");
        exit();
    }

    else {
    $message = "NIGGA";
    }
}   
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method = "POST">

        <label for "username">Enter Your Username
        <input type="text" name="username">
        </label>
        <br><br>
        <label for "password">Enter Your Password
        <input type="password" name="password">
        </label>
        <br><br>
    <button type= "submit" >Submit</button>        
    </form>

</body>

</html>