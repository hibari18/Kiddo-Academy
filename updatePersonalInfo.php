<?php
include "db_connect.php";
if(isset($_POST['btnpersonal']))
{
	$id = $_POST['txtPerId'];
	$lname = $_POST['txtPerLname'];
	$fname = $_POST['txtPerFname'];
	$mname = $_POST['txtPerMname'];
	$bday = $_POST['txtPerBday'];
	$bplace = $_POST['txtPerBplace'];
	$add = $_POST['txtPerAdd'];
	$gender = $_POST['optradio'];

	$query = "update tblstudent set tblStudentFname = '$fname', tblStudentLname = '$lname', tblStudentMname = '$mname' where tblStudentId = '$id'";
	$result=mysqli_query($con, $query);
	$query = "update tblstudentinfo set tblStudInfoBday = '$bday', tblStudInfoBplace = '$bplace', tblStudInfoAddress = '$add', tblStudInfoGender = '$gender' where tblStudInfo_tblStudentId = '$id'";
	$result=mysqli_query($con, $query);
	if (!$query = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }else{
	        header('location:profilev2.php');
	    }
}
?>