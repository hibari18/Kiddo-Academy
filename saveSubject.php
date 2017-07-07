<?php
include "db_connect.php";
if(isset($_POST['btnAddLvl']))
{
	$id = strtoupper($_POST['txtAddSubjId']);
	$name = strtoupper($_POST['txtAddSubj']);
	$active = $_POST['selAddSubjId'];

	$query = "insert into tblsubject(tblSubjectId, tblSubjectDesc, tblSubjectFlag, tblSubjectActive) values('$id', '$name', 1, '$active')";
	if (!$query = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
	}else{
    header('location:curriculumv2.php?message=2');;
	}
}
?>