<?php
include "db_connect.php";
if(isset($_POST['btnUpdDiv']))
{
	$divId = $_POST['txtUpdDivId'];
	$div = strtoupper($_POST['txtUpdDiv']);
	$active = $_POST['selUpdDivAct'];

	$query = "update tbldivision set tblDivisionName = '$div', tblDivisionActive = '$active' where tblDivisionId = '$divId'";
	if (!$query = mysqli_query($con, $query)) {
	   exit(mysqli_error($con));
	}else{
	   header('location:curriculumv2.php?message=4');
	}
}
?>