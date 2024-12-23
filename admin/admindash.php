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
   ?>
<div class="admintitle">
    <h1>WELCOME TO ADMIN DASHBOARD</h1>
</div>

<div class="dashboard">
    <table align="center">
        <tr>
            <td>
                <a href="addstudent.php">
                    <h3>INSERT STUDENT DETAILS</h3>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="updatestudent.php">
                    <h3>UPDATE STUDENT DETAILS</h3>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="deletestudent.php">
                    <h3>DELETE STUDENT DETAILS</h3>
                </a>
            </td>
        </tr>

    </table>
    <div class="logout">
        <h3>
            <a href="logout.php"></i>LOGOUT</a>

        </h3>
    </div>
</div>
</body>

</html>