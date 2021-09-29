<?php
include "config.php";
$id=$_REQUEST['id'];
$d ="delete from stud1 where id='$id'";

$res= mysqli_query($con,$d);

header("location: view.php");
?>