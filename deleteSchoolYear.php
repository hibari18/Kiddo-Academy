<?php
    include "db_connect.php";
    if(isset($_POST['btnDelSy'])){
        $id = $_POST['txtDelSyId'];
        $query="select tblSchoolYrActive from tblschoolyear where tblSchoolYrId='$id'";
        $result=mysqli_query($con, $query);
        $row=mysqli_fetch_assoc($result);
        $active=$row['tblSchoolYrActive'];
        if($active=="INACTIVE")
        {
        	$query="update tblschoolyear set tblSchoolYearFlag = 0 where tblSchoolYrId = '$id'";
			if (!$query = mysqli_query($con, $query)) {
	   			exit(mysqli_error($con));
			}else{
	   			header('location:school-yearv2.php?message=6');
			}
        }else if($active=="ACTIVE")
        {
        	header('location:school-yearv2.php?message=7');
        }
    }
?>