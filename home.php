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
        button {
    background-color: #4CAF50;
    border: none;
    color: white;
    font-family: OpenSans-Regular;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 10px;
    cursor: pointer;
    border-radius: 3px;
}

input[type=text], input[type=password] {
    font-family: Roboto-Regular;
    color: Black;
    font-size: 18px;
    height: 40px;
    margin: 10px;
    padding: 1px 1px;
    bottom: 0;
    border: 1px;
    box-sizing: border-box;
    background-color: lightred;
    border-radius: 3px;
    border-color:red;
}


article {
  float: left;
  padding: 10px;
  width: 65%;
  background-color: #f1f1f1;
  height: 300px; 
   
}

aside
{
    padding: 10px;
    height: 300px; 
    background-image: url("11.webp");
}

footer {
  background-color: #777;
  padding: 50px;
  text-align: left;
  color: white;
  font-size:15px;
  font-family: Cambria;
} 
 </style>

</head>
<body>
<article>
<img src="./images/banking.gif" height="100%" width="100%">
</article>
 <aside>
&nbsp;
<p></p>
&nbsp;
<center >    
     <form action="customer_login_action.php" method="post">
                        <label for="fname">User Name:</label></br>
                        <input type="text" name="cust_uname" placeholder="Enter your Username" required> </br>
                        <label for="Password">Password:</label></br>
                        <input type="password" name="cust_psw" placeholder="Enter your Password" required></br>
                        <button type="submit">Login</button></br>
     </form>
</center>
</aside>
<footer>
@ copyrights reserved <b>iBanking</b>
</footer>

</body>
</html>
