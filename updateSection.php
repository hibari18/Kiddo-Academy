<?php
include "db_connect.php";
if(isset($_POST['updSectBtn']))
{
	if(isset($_POST['updLvlName']))
	{
	$lvlName = $_POST['updLvlName'];
	$sectId = $_POST['updSectId'];
	$sectName = $_POST['updSectName'];
	$search = "select * from tblsection where tblSectionName = '$sectName' and tblSectionFlag=1";
	$result = $con->query($search);
	if ($result->num_rows == 0) 
	{
	$query = "select tblLevelId from tbllevel where tblLevelName = '$lvlName'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
	$lvlId = $row['tblLevelId'];
	$query = "update tblsection set tblSectionName = '$sectName', tblSection_tblLevelId = '$lvlId' where tblSectionId = '$sectId'";
	$result = mysqli_query($con, $query);
		if (!$query = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }else{
	        header('location:sectionv2.php?message=4');
	    }
	}else
	{
		header('location:sectionv2.php?message=3');
	}
	}
}
?>