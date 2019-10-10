<?php
session_start();
require_once 'token.php';

$_SESSION["user"] = '';


if(isset($_POST['username']) && isset($_POST['password']))
{
    if($_POST['username'] == "admin" && $_POST['password']=="123")
    {
        $_SESSION["user"] = $_POST['username'];
        $token = Token::generate(session_id());
        setcookie("id", session_id());
        header('Location: home.php');
        header('Location: ./home.php');
    }

    else
    {
        echo "<script>alert('Check username and password');</script>";
        echo "<noscript>Check username and password</noscript>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/HomePage.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>

    <title>login</title>
</head>
<body>
<div class="container">
    <div class="form">
        <form action="" method="post">
            <table class="formTable">
                <tr>
                    <td><input type="text" placeholder="Enter user name" name="username" required></td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Password" type="password" name="password" required></td>
                </tr>
            </table>
            <input type="submit" value="login" name="submitButton" id="sButton">
        </form>
    </div>
    <div class="bottom">
    </div>
</div>
</body>
</html>

