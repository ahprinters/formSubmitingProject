<?php

 $con = new mysqli('localhost', 'root', '', 'formsubmission');
if (!$con)
{
   echo "Database connection successfully";
    die(mysqli_error($con));
} 

?>