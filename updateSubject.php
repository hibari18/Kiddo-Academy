<?php
include "db_connect.php";
if(isset($_POST['btnUpdSubj']))
{
	$id = $_POST['txtUpdSubjId'];
	$name = strtoupper($_POST['txtUpdSubj']);
	$active = $_POST['selUpdSubjAct'];			
	$query = "update tblsubject set tblSubjectDesc = '$name', tblSubjectActive = '$active' where tblSubjectId = '$id'";
	$result = mysqli_query($con, $query);
	if (!$query = mysqli_query($con, $query)) {
	   exit(mysqli_error($con));
	}else{
	   header('location:curriculumv2.php?message=4');
	}
}
?>
