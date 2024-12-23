<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="navbar">
            <h1>
                WELCOME TO STUDENT MANAGEMENT SYSTEM
            </h1>
        </div>
        <div class="adminbtn">
            <h3>
                <a href="login.php">Admin Login</a>
            </h3>
        </div>
    </header>
    <h1 align=center>USER LOGIN PAGE</h1>
    <div class="table">
        <form action="userdash.php" method="post">
            <table style="width: 50%;" , align=center border="2">
                <tr>
                    <td>
                        Username
                    <td><input type="text" name="uname" required></td>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    <td><input type="password" name="pass" required></td>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <input type="submit" name="login" value="Login">
                    </td>
                </tr>
            </table>
    </div>
    </form>
</body>

</html>


<?php

// if(isset($_POST['login']))
// {
//     $username=$_POST['uname'];
//     $password=$_POST['pass'];


//     include('dbconnection.php');
//     include('afteruserlogin.php');

//     showdetails($username,$password);  //using function we create

// }

?>