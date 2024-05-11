<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_USER_ID'];
?>	
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Vehicle Track</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />     
        <meta name="author" content="codedthemes">
        <?php include("include/css.php");?>     
	</head>
<body>
	<!-- Navigator -->
    <div class="fixed-button">
        <a href="#home" class="btn btn-md btn-primary">
            <i class="fa fa-toggle-up" aria-hidden="true"></i> Top
        </a>
    </div>
    <!-- navigator end -->
    
    <!-- Pre-loader start -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>                      
                       <a href="index.php">
                          Vehicle Track
                       </a>                      
                   </div>
               </div>
           </nav>
           
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include("include/leftmenu.php");?>
                    <div class="pcoded-content" id="home">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                      <div class="row">
                                            <!-- order-card start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Fuel</h6>
                                                        <h2 class="text-right"><i class="ti-money f-left"></i><span>
                                                        <?php
															$tot=0;
															$result = $db->prepare("select * from track where Log_Id='$Log_Id' and st='fuel'");
															$result->execute();
															for($i=0; $row = $result->fetch(); $i++)
															{
																$tot=$tot+$row['amt'];
															}
															echo $tot;
														 ?>
                                                        </span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Workshop</h6>
                                                        <h2 class="text-right"><i class="ti-money f-left"></i><span>
                                                        <?php
															$tot=0;
															$result = $db->prepare("select * from track where Log_Id='$Log_Id' and st='workshop'");
															$result->execute();
															for($i=0; $row = $result->fetch(); $i++)
															{
																$tot=$tot+$row['amt'];
															}
															echo $tot;
														 ?>
                                                        </span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-yellow order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Vehicle Cost</h6>
                                                        <h2 class="text-right"><i class="ti-reload f-left"></i><span>
                                                        <?php
															$tot=0;
															$result = $db->prepare("select * from vehicle where Log_Id='$Log_Id'");
															$result->execute();
															for($i=0; $row = $result->fetch(); $i++)
															{
																$tot=$tot+$row['amt'];
															}
															echo $tot;
														 ?>
                                                        </span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-pink order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Vehicle</h6>
                                                        <h2 class="text-right"><i class="ti-wallet f-left"></i><span>
                                                        	<?php
																$result = $db->prepare("select count(*) from vehicle where Log_Id='$Log_Id'");
																$result->execute();
																for($i=0; $row = $result->fetch(); $i++)
																{
																	echo"".$row['count(*)']."";
																}
															?>
                                                        </span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- order-card end -->

                                            <!-- social statustic start -->
                                            <div class="col-md-12 col-lg-4">
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="fa fa-envelope-open text-c-blue d-block f-40"></i>
                                                        <h4 class="m-t-20"><span class="text-c-blue">
                                                      	 <?php
															$tot=0;
															$result = $db->prepare("select * from insurance where Log_Id='$Log_Id'");
															$result->execute();
															for($i=0; $row = $result->fetch(); $i++)
															{
																$tot=$tot+$row['amt'];
																$ndate=$row['ndate'];
															}
															echo $tot."k";
														 ?>
                                                        </span> Insurance</h4>
                                                        <p class="m-b-20">Next Date <?php echo $ndate;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                           <!-- social statustic end -->
                                           
                                            <!-- social statustic start -->
                                            <div class="col-md-12 col-lg-4">
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="fa fa-envelope-open text-c-blue d-block f-40"></i>
                                                        <h4 class="m-t-20"><span class="text-c-blue"> 
														<?php
															$tot=0;
															$result = $db->prepare("select * from pollution where Log_Id='$Log_Id'");
															$result->execute();
															for($i=0; $row = $result->fetch(); $i++)
															{
																$tot=$tot+$row['amt'];
																$ndate=$row['ndate'];
															}
															echo $tot."k";
														 ?>
                                                        </span> Pollution</h4>
                                                        <p class="m-b-20">Next Date <?php echo $ndate;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                           <!-- social statustic end -->
                                           
                                            <!-- social statustic start -->
                                            <div class="col-md-12 col-lg-4">
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="fa fa-envelope-open text-c-blue d-block f-40"></i>
                                                        <h4 class="m-t-20"><span class="text-c-blue"> 
														<?php
															$tot=0;
															$result = $db->prepare("select * from taxtest where Log_Id='$Log_Id'");
															$result->execute();
															for($i=0; $row = $result->fetch(); $i++)
															{
																$tot=$tot+$row['amt'];
																$ndate=$row['ndate'];
															}
															echo $tot."k";
														 ?>
                                                        </span> Tax And Test</h4>
                                                        <p class="m-b-20">Next Date <?php echo $ndate;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                           <!-- social statustic end -->
                                           
                                           
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>  
    <!-- Pre-loader end -->          
</body>
<?php include("include/js.php");?>

</html>
