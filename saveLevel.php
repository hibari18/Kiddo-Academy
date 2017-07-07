<?php
include "db_connect.php";

$lvlName = strtoupper($_POST['txtAddLvl']);
$divId = $_POST['selAddLvlDiv'];
$active = $_POST['selAddLvlAct'];

$query = "select * from tbllevel order by tblLevelId desc limit 0, 1";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$id = $row['tblLevelId'];
$id ++;
$query = "insert into tbllevel value ('$id', '$lvlName', '$divId', 1, '$active')";
if (!$query = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}else{
    header('location:curriculumv2.php?message=2');;
}
?>