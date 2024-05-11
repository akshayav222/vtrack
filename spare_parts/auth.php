<?php
session_start();
if(!isset($_SESSION['SESS_SPAREPARTS_ID']) || (trim($_SESSION['SESS_SPAREPARTS_ID']) == '')) {
	header("location:../");
	exit();
}

?>
