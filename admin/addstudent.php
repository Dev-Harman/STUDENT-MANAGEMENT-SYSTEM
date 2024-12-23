<?php
session_start();
if(isset($_SESSION['uid'])) // if session started means user login
{
    echo "";
}
else // this is for if someone directly access this file then redirect to login page
{
    header('location: ../login.php'); 
}
?>

<?php

include('header.php'); // we use css in every page
include('navbar.php');
?>
<form action="addstudent.php" method="post" enctype="multipart/form-data">
    <!-- enctype for store image in db -->
    <table align="center" border="2" style="width: 50%;">
        <tr>
            <td>
                USERNAME
            </td>
            <td><input type="text" name="username" placeholder="Enter Username" required></td>
        </tr>
        <tr>
            <td>
                PASSWORD
            </td>
            <td><input type="text" name="password" placeholder="Enter Password" required></td>
        </tr>
        <tr>
            <td>
                ROLLNO
            </td>
            <td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
        </tr>
        <tr>
            <td>
                NAME
            </td>
            <td><input type="text" name="name" placeholder="Enter Name" required></td>
        </tr>
        <tr>
            <td>
                CITY
            </td>
            <td><input type="text" name="city" placeholder="Enter City" required></td>
        </tr>
        <tr>
            <td>
                PARENT CONTACT NUMBER
            </td>
            <td><input type="text" name="pcon" placeholder="Enter Number of Parent" required></td>
        </tr>
        <tr>
            <td>
                STANDARD
            </td>
            <td><input type="number" name="standard" placeholder="Enter Standard" required></td>
        </tr>
        <tr>
            <td>
                STUDENT IMAGE
            </td>
            <td><input type="file" name="simg" required></td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>

    </table>
</form>

</body>

</html>

<?php
if(isset($_POST['submit']))
{
    include('../dbconnection.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];;
    $city=$_POST['city'];;
    $pcon=$_POST['pcon'];;
    $standard=$_POST['standard'];
    $imagename=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"../dataimage/$imagename");

    $qry="INSERT INTO `student`(`username`,`password`,`rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES ('$username','$password','$rollno','$name','$city','$pcon','$standard','$imagename')";
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
<script>
alert('DATA INSERTED SUCESSFULLY');
</script>

<?php
    }
}   


?>