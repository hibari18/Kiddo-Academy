<?php
include "db_connect.php";
if(isset($_POST['btnAdd']))
{
	$fname=$_POST['txtFname'];
	$lname=$_POST['txtLname'];
	$mname=$_POST['txtMname'];
	$bday=$_POST['txtBday'];
	$bplace=$_POST['txtBplace'];
	$gender=$_POST['optradio'];
	$add=$_POST['txtAdd'];
	$no=$_POST['txtNo'];
	$email=$_POST['txtEmail'];
	$position=$_POST['selPosition'];

	$query="select * from tblfaculty;";
	$result=$con->query($query);
	if($result->num_rows == 0)
	{	
		$zero = (string) "0000";
		$id=(string)"1";
	}else
	{
		$query="select * from tblfaculty group by tblFacultyId desc limit 0, 1";
		$result=mysqli_query($con, $query);
		$row = mysqli_fetch_assoc($result);
		$id = $row['tblFacultyId'];
		$id +=1;
		$lId=(string) strlen($id);
		if($lId==1)
		{
			$zero=(string)"0000";
		}else if($lId==2)
		{
			$zero=(string)"000";
		}else if($lId==3)
		{
			$zero=(string)"00";
		}else if($lId==4)
		{
			$zero=(string)"0";
		}else if($lId==5)
		{
			$zero=(string)"";
		}
	}
	$format='%s%d';
	$realid = sprintf($format,$zero,$id);
	
	$query="insert into tblfaculty(tblFacultyId, tblFacultyFname, tblFacultyLname, tblFacultyMname, tblFacultyGender, tblFacultyEmail, tblFacultyFlag, tblFaculty_tblFacultyPositionId, tblFacultyContact, tblFacultyAddress, tblFacultyBday, tblFacultyBplace) values ('$realid', '$fname', '$lname', '$mname', '$gender', '$email', 1, '$position', '$no', '$add', '$bday', '$bplace')";
	if (!$query = mysqli_query($con, $query)) {
    	exit(mysqli_error($con));
	}else{
    	header('location:faculty-add.php');
	}
}
?>