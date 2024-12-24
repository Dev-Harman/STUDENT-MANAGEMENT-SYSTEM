<?php
function showdetails($username, $password)
{
    include('dbconnection.php');

    $sql = "SELECT * FROM `student` WHERE `username`='$username' AND `password`='$password'";
    $run = mysqli_query($conn, $sql);

    if (mysqli_num_rows($run) > 0) {
        $data = mysqli_fetch_assoc($run);
?>


<table border="3" style="width: 50%; margin-top:20px;" align="center">
    <tr>
        <th colspan="3">
            MY DETAILS
        </th>
    </tr>
    <tr>
        <td rowspan="5"> <img src="dataimage/<?php echo $data['image']; ?>" style="max-height:150px; max-width:120px"
                ; /> </td>
        <th>ROLL NO</th>
        <td><?php echo $data['rollno']; ?></td>
    </tr>
    <tr>
        <th>NAME</th>
        <td><?php echo $data['name']; ?></td>
    </tr>
    <tr>
        <th>STANDARD</th>
        <td><?php echo $data['standard']; ?></td>
    </tr>
    <tr>
        <th>PARENTS CONTACT NUMBER</th>
        <td><?php echo $data['pcont']; ?></td>
    </tr>
    <tr>
        <th>CITY</th>
        <td><?php echo $data['city']; ?></td>
    </tr>

</table>


<?php
    }
    else
    {
 echo "<script>
alert('Un Valid Username or Password');
window.open('userlogin.php', '_self');
</script>";
    }
}


?>