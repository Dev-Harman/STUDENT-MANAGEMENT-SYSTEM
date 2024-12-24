<?php
session_start();
if(isset($_SESSION['uid']))
// session then set if user login so we use isset function e.g. if browser close then session close
// then this if condition not work and admin needs to login 
{
    header('location:admin/admindash.php'); 
}
// if admin already login and come to this page using url then redirect to dashboard page
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
</head>

<body>
    <h1 style="width: 30%;" align="center"><a href="userlogin.php" style="text-decoration: none; color:brown ">User
            Login Page</a></h1>
    <h1 align=center>Admin Login</h1>
    <form action="login.php" method="post">
        <table style="width: 30%;" , align=center border="2">
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
    </form>
</body>

</html>


<?php

include('dbconnection.php'); //i include db connection php file i dont need ta create connection everytime
if(isset($_POST['login']))
{

$Username=$_POST['uname'];
$Password=$_POST['pass'];
// $sql="select*from emp where empid=".$id;
$qry="SELECT * FROM `admin` WHERE `username`='$Username' AND `password`='$Password'";
$run=mysqli_query($conn,$qry); //$conn parameter for database connection

$row=mysqli_num_rows($run); //this function return how much rows we recieve related to this username or password

if($row <1)
{
?>
<script>
alert('Un Valid Username or Password');
window.open('login.php', '_self');
</script>

<?php
}
else
{
    $data=mysqli_fetch_assoc($run); //this function return array
    $id=$data['id'];
    // once we verified admin the admin id we use in full project then we create session
    $_SESSION['uid']=$id;
    header('location:admin/admindash.php'); // using this function we redirect user to admin dashboard file
}
}
?>
