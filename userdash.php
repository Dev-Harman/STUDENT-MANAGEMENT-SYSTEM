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
                USER HOME PAGE
            </h1>
        </div>
        <div class="adminbtn">
            <h3>
                <a href="logout.php">LOGOUT</a>
            </h3>
        </div>
    </header>
</body>

</html>
<?php

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];


    include('dbconnection.php');
    include('afteruserlogin.php');

    showdetails($username, $password);  //using function we create

}

?>
