<?php
include "db_connect.php";
if(isset($_POST['addSectBtn']))
{	
	if(isset($_POST['addLvlSelect']))
	{
	$subjid  = array();
	$day = array("MONDAY","TUESDAY","WEDNESDAY","THURSDAY","FRIDAY");
	$lvlSel = $_POST['addLvlSelect'];
	$section = $_POST['addSectTxt'];
	$search = "select * from tblsection where tblSectionName = '$section' and tblSectionFlag=1";
	$result = $con->query($search);
	if ($result->num_rows == 0) 
	{
		$search = "select * from tblsection where tblSectionName = '$section' and tblSectionFlag=0";
		$result = $con->query($search);
		if($result->num_rows == 0)
		{
			$query = "select * from tblsection order by tblSectionId desc limit 0, 1";
			$result = mysqli_query($con, $query);
			$row = mysqli_fetch_assoc($result);
			$sectid = $row['tblSectionId'];
			$sectid ++;
			$sql = "select `tblLevelId` from `tbllevel` where `tblLevelName` = '$lvlSel' order by `tblLevelId` desc limit 0, 1";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);
			$lvlid = $row['tblLevelId'];
			$query = "insert ignore into `tblsection`(`tblSectionId`, `tblSectionName`, `tblSection_tblLevelId`, `tblSectionFlag`) values ('$sectid', '$section', '$lvlSel', 1)";
			$result = mysqli_query($con, $query);
	
			$query = "select * from tblsched order by tblSchedId desc limit 0, 1";
			$result = mysqli_query($con, $query);
			$row = mysqli_fetch_assoc($result);
			$schedid = $row['tblSchedId'];

			$query = "select l.tblLevelName, s.tblSubjectId, s.tblSubjectDesc, sc.tblSectionId, sc.tblSectionName from tbllevel l, tblsubject s, tblsection sc, tblcurriculumdetail c, tblcurriculum cu where l.tblLevelid=c.tblCurriculumDetail_tblLevelId and s.tblSubjectId=c.tblCurriculumDetail_tblSubjectId and sc.tblSection_tblLevelId=l.tblLevelId and l.tblLevelId='$lvlSel' and sc.tblSectionName='$section' and cu.tblCurriculumActive='ACTIVE' and c.tblCurriculumFlag=1";
			$result=mysqli_query($con, $query);
			while($row1=mysqli_fetch_array($result))
			{
				$s1=$row1['tblSubjectId'];
				$s2=$row1['tblSectionId'];
				array_push($subjid, $s1);

			}
			foreach($day as $days)
			{
				foreach($subjid as $subj)
				{
					$query="insert into tblsched(tblSchedDay, tblSched_tblSubjectId, tblSched_tblSectionId, tblSchedFlag) values ('$days', '$subj', '$s2', 1)";
					if (!$query = mysqli_query($con, $query)) {
    					exit(mysqli_error($con));
    					header('location:sectionv2.php?message=1');
					}else{
    					header('location:sectionv2.php?message=2');
					}
				}
			}
		}else
		{
			$query="update tblsection set tblSectionFlag=1 where tblSectionName='$section'";
			$result = mysqli_query($con, $query);
			$query="select * from tblsection where tblSectionName='$section'";
			$result=mysqli_query($con, $query);
			$row=mysqli_fetch_array($result);
			$sectionId = $row['tblSectionId'];
			$query = "update tblsched set tblSchedFlag=1 where tblSched_tblSectionId = '$sectionId'";
			if (!$query = mysqli_query($con, $query)) {
    			exit(mysqli_error($con));
    			header('location:sectionv2.php?message=1');
			}else{
   				header('location:sectionv2.php?message=2');
			}
		}
	}else
	{
		header('Location: sectionv2.php?msg=1');
	}
	
	}
	
}
mysqli_close($con);
?>