<?php
include "db_connect.php";

$yr = $_POST['txtAddSy'];
$currId = $_POST['selAddSyCurr'];
$yr2 = $yr + 1;
$year = 'S.Y. '.$yr.'-'.$yr2;
$find = "select * from tblschoolyear where tblSchoolYrYear = '$year'";
$result = $con->query($find);
if ($result->num_rows == 0) 
{
$query = "select * from tblschoolyear order by tblSchoolYrId desc limit 0, 1";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$id = $row['tblSchoolYrId'];
$query = "UPDATE tblschoolyear SET tblSchoolYrActive = 'INACTIVE' WHERE tblSchoolYrActive = 'ACTIVE'";
$result = mysqli_query($con, $query);
$id ++;
$query = "INSERT INTO tblschoolyear(tblSchoolYrId,tblSchoolYrYear, tblSchoolYr_tblCurriculum, tblSchoolYrStart, tblSchoolYrActive) VALUES('$id', '$year', '$currId', '$yr', 'ACTIVE')";
if (!$query = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}else{
    header('location:school-yearV2.php?message=2');
}
//numberclass
$arrMonth = array("June","July","August","September","October","November","December","January","February","March");
foreach($arrMonth as $value){
	$query = "select * from tblnumberclass order by tblNumClassid desc limit 0, 1";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$dayid = $row['tblNumClassid'];
	$dayid ++;
	$query = "INSERT INTO tblnumberclass(tblNumClassid,tblNumClassMonth,tblNumClass_tblSy) VALUES ('$dayid','$value','$id')";
	if (!$query = mysqli_query($con, $query)) {
	    exit(mysqli_error($con));
	}else{
	    header('location:school-yearV2.php?message=2');
	}
}
}else{
	header('Location: school-yearV2.php?msg=1');
}

mysqli_close($con);
?>


