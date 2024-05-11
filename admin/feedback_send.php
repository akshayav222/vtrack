<?php
	include("auth.php");
	include('../connect/db.php');
	$fdbk_id=$_GET['fdbk_id'];
	
	$result = $db->prepare("select * from feedback where fdbk_id='$fdbk_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];
		$contact_no=$row["cntno"];
		$subj=$row["subj"];
		$sdate=$row["sdate"];
	}
	
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
                                            <div class="col-sm-6">
                                            <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="m-b-10">Feedback Reply</h5>
                                                        
                                                     </div>
                                                     <div class="card-block">
                                                        <form method="post" enctype="multipart/form-data" autocomplete="off" action="action/feedback_view_send_save.php">
                                                           <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                <input type="hidden" name="fdbk_id"  value="<?php echo $fdbk_id;?>">
                                                                    <input type="text" name="name" class="form-control form-control-primary" required value="<?php echo $name;?>" readonly>
                                                                </div>
                                                            </div>
                                                                                                                   
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Contact</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="contact_no" class="form-control form-control-primary" required value="<?php echo $contact_no;?>" readonly>
                                                                </div>
                                                            </div>                                                           
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Subject</label>
                                                                <div class="col-sm-10">
                                                                    <textarea name="subjd" class="form-control form-control-primary" required rows="4" readonly><?php echo $subj;?></textarea>
                                                                </div>
                                                            </div>
                                                              <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Reply</label>
                                                                <div class="col-sm-10">
                                                                    <textarea name="subj" class="form-control form-control-primary" required rows="4"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row pull-right">
                                                               <div class="col-sm-10">
                                                                 <input type="submit" class="btn btn-danger btn-round btn-bg " value="Send">
                                                                </div>
                                                            </div>
                                                        </form>
                                                     </div>
                                                  </div>
                                                <!-- Basic Form Inputs carde end -->      
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
	</div>  
    <!-- Pre-loader end -->          
</body>
<?php include("include/js.php");?>

</html>
