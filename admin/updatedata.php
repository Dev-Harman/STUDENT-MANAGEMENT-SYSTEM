<?php
include('../dbconnection.php');
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$pcon=$_POST['pcon'];
$standard=$_POST['standard'];
$id=$_POST['sid'];
$imagename=$_FILES['simg']['name'];
$tempname=$_FILES['simg']['tmp_name'];
move_uploaded_file($tempname,"../dataimage/$imagename");

$qry="UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standard`='$standard', `image` = '$imagename' WHERE `id` = $id;";
$run=mysqli_query($conn,$qry);

if($run==true)
{
    ?>
<script>
alert('DATA UPDATED SUCESSFULLY');
window.open('updateform.php?sid=<?php echo $id; ?>', '_self');
</script>

<?php
}
?>