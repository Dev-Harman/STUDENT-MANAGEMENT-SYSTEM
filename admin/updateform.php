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
include('../dbconnection.php');
$sid=$_GET['sid']; 
// here we catch sid from url and stote in the variable
$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($conn,$sql);

$data=mysqli_fetch_assoc($run);


?>
<form action="updatedata.php" method="post" enctype="multipart/form-data">
    <!-- enctype for store image in db -->
    <table align="center" border="2" style="width: 50%;">
        <tr>
            <td>
                ROLLNO
            </td>
            <td><input type="text" name="rollno" value= <?php echo $data['rollno']; ?> required></td>
        </tr>
        <tr>
            <td>
                NAME
            </td>
            <td><input type="text" name="name" value=<?php echo $data['name'];?> required></td>
        </tr>
        <tr>
            <td>
                CITY
            </td>
            <td><input type="text" name="city" value=<?php echo $data['city'];?> required></td>
        </tr>
        <tr>
            <td>
                PARENT CONTACT NUMBER
            </td>
            <td><input type="text" name="pcon" value=<?php echo $data['pcont'];?> required></td>
        </tr>
        <tr>
            <td>
                STANDARD
            </td>
            <td><input type="number" name="standard" value=<?php echo $data['standard'];?> required></td>
        </tr>
        <tr>
            <td>
                STUDENT IMAGE
            </td>
            <td><input type="file" name="simg" required></td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <input type="hidden" name="sid" value="<?php echo $data['id'];?>"/>
                
              <input type="submit" name="submit" value="Submit">
            </td>
        </tr>

    </table>
</form>