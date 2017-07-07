<?php
include "db_connect.php";
$lvlId = $_POST['txtAddFeeLvlId'];
$name = strtoupper($_POST['txtAddFeeName']);
$arrLevel = array();
$query="select * from tblfee order by tblFeeId desc limit 0, 1";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$id = $row['tblFeeId'];
$id++;
$query = "insert into tblfee(tblFeeId, tblFeeName, tblFeeFlag) values ('$id', '$name', 1)";
$result = mysqli_query($con, $query);
$query = "select tblLevelId, tblLevelName from tbllevel where tblLevelFlag = 1";
$result = $con->query($query);
$num = $result->num_rows;

for($i = 1; $i<=$num; $i++)
{
	$query="select * from tblfeeamount order by tblFeeAmountId desc limit 0, 1";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	$amntId = $row['tblFeeAmountId'];
	$amntId++;
	$query = "insert into tblfeeamount(tblFeeAmountId, tblFeeAmount_tblFeeId, tblFeeAmount_tblLevelId, tblFeeAmountFlag) values ('$amntId','$id','$i',1)";
	if (!$query = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
	}else{
    header('location:paymentv2.php?message=2');
	}
}
?>