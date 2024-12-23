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
<table align="center">
    <form action="deletestudent.php" method="post">
        <tr>
            <th>ENTER STANDARD</th>
            <td><input type="number" name="standard" placeholder="Enter standard" required></td>

            <th>ENTER STUDENT NAME</th>
            <td><input type="text" name="stuname" placeholder="Enter Student Name" required></td>
            <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
        </tr>
    </form>
</table>

<table align="center" width="80%" border="2" style="margin-top: 10px;">
    <tr>
        <th>NUMBER</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>EDIT</th>
    </tr>

    <?php
if(isset($_POST['Submit']))
{
include('../dbconnection.php');
$standard=$_POST['standard'];
$name=$_POST['stuname'];

$sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name`LIKE '%$name%'";
$run=mysqli_query($conn,$sql);
if(mysqli_num_rows($run)<1)
{
echo"<tr><td colspan='5' >NO RECORDS FOUND</td></tr>";
}
else{
    $count=0;
    while($data=mysqli_fetch_assoc($run))
    {
        $count++;
        ?>
    <tr align="center">
        <td> <?php echo $count;?> </td>
        <!-- it is for serial number -->
        <td><img src="../dataimage/<?php echo $data['image']; ?>" style="max-width:100px;" /></td>
        <!-- fetching image -->
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['rollno']; ?></td>
        <td><a href="deleteform.php?sid=<?php echo $data['id'] ?> ">DELETE</a></td>
        <!-- here we catch the sid using get method  -->
    </tr>



    <?php
    }
}
}
?>
</table>