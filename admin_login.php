<?php
    include "header.php";
    include "navbar.php";

    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body{
        background: url("images/background.png") ;
        background-size: cover;
        }
    input,label,button{
        font-size: 20px ;
        padding: 5px;
    }
 </style>   
</head>


<body>
    <center>
    <form action="admin_login_action.php" method="post">
        <h2>Administrator Login</h2></br>
        <label><b>Username</b></label>
        <input type="text" name="admin_uname" required></br>
        <p></p>
        <label><b>Password</b></label>
        <input type="password" name="admin_psw" required></br>
        <h1></h1>
        <button type="submit" style="height:40px;width:100px" >Login</button>
    </form>
    </center>
</body>
</html>
