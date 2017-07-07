<?php
    include "db_connect.php";
    if(isset($_POST['btnDelLvl'])){
        $id = $_POST['txtDelLvlId'];
        $search="select * from tblcurriculumdetail where tblCurriculumDetail_tblLevelId='$id' and tblCurriculumFlag=0";
        $findCd=$con->query($search);
        $search="select * from tblschemedetail where tblSchemeDetail_tblLevel='$id' and tblSchemeDetailFlag=0";
        $findSd=$con->query($search);
        $search="select * from tblfeedetail where tblFeeDetail_tblLevelId='$id' and tblFeeDetailFlag=0";
        $findFd=$con->query($search);
        if($findCd->num_rows == 0 or $findSd->num_rows == 0 or $findFd->num_rows == 0)
        {
        	$query="update tbllevel set tblLevelFlag = 0 where tblLevelId = '$id'";
        	if (!$query = mysqli_query($con, $query)) {
	   			exit(mysqli_error($con));
	   			header('location:curriculumv2.php?message=5');
			}else{
	   			header('location:curriculumv2.php?message=6');
			}
        }else if($findCd->num_rows > 0 or $findSd->num_rows > 0 or $findFd->num_rows > 0)
        {
        	header('location:curriculumv2.php?message=8');
        }
		
    }
?>