<?php
	include("../../connect/db.php");	
	
	$Log_Id=$_POST["Log_Id"];
	$aadharno=$_POST["aadharno"];
	$vname=$_POST["vname"];
	$vno=$_POST["vno"];
	$vtype=$_POST["vtype"];
	$ndate=$_POST["ndate"];
	$fname=$_POST["cmpny"];
	$vbdate=$_POST["vbdate"];
	$vmodel=$_POST["vmodel"];
	$amt=$_POST["amt"];
	$desp=$_POST["desp"];
	$txtst=$_POST["txtst"];
	$date=date("Y-m-d");
	
	
	$sql = "insert into taxtest(Log_Id,aadharno,vno,vname,vtype,ndate,fname,amt,desp,date,txtst)values('$Log_Id','$aadharno','$vno','$vname','$vtype','$ndate','$fname','$amt','$desp','$date','$txtst')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	$sql = "insert into track(Log_Id,aadharno,vname,vhno,model,bdaye,amt,date,st)values('$Log_Id','$aadharno','$vname','$vno','$vmodel','$vbdate','$amt','$date','$txtst')";
	$q1 = $db->prepare($sql);
	$q1->execute();

	header("location:../tax_invoice.php");
?>
