<?php

session_start();

require_once 'token.php';

$display_messsge = "";

if(isset($_POST['fname'], $_POST['lname'], $_POST['csrf_token'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $csrf_token = $_POST['csrf_token'];

    if(!empty($fname) && !empty($lname) && !empty($csrf_token))
    {
        if(Token::check($csrf_token))
        {
            $messsge = "Shook ane...Updated Successfully! " ;
            $display_messsge = "<p class=\"text-success\"><strong>".$messsge."</strong></p>";
        }
        else{
            $messsge = "Sorry ane...Invalid token value, can not update!!!!";
            $display_messsge= "<p class=\"text-danger\"><strong>".$messsge."</strong></p>";
        }
    }
    else{
        echo "<script>alert('Check your details');</script>";
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Update user</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
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
</head>
<body>
<div class="container">

    <?php
    if (session_id() == '' || !isset($_SESSION['user'])) {
        header('Location: ./login.php');
        ?>
        <?php
    }
    else {
    echo "WELCOME ".$_SESSION['user']." ; ";
    ?>

    <div class="form">
        <form action="" method="post">
            <table class="table1">
                <tr>
                    <td><h2> <td><h2 class="title-up"> Update User</h2></td></h2></td>
                </tr>
                <tr>
                    <td><label for="fname">*</label></td>
                    <td>
                        <input class="updatename left" name="fname" placeholder="First Name" value="" type="text" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="lname">*</label></td>
                    <td><input class="updatepass" id="lname" name="lname" placeholder="Last Name" value="" type="text" required></td>
                </tr>
                <tr>
                </tr>
            </table>
            <div id="hidden_input">

            </div>
            <button class="cancel  btn btn-default" style="margin: auto auto 0px 70px; background-color: #0080ff;" id="update_button"  value="Update"> Update </button>
            <a href="logout.php"   class="cancel  btn btn-default" style="margin: 8px auto 0px 30px; background-color: #0080ff;">Logout</a>
        </form>
    </div>
    <div class="bottom">
    </div>
    <div>
        <?php
        echo $display_messsge;
        echo "<script>alert(document.cookie)</script>";
        }
        ?>
    </div>
    <script type="text/javascript" src="./script.js"></script>
</div>
</body>
</html>
