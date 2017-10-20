<?php
	require("import.php");
	$list = new list_table();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

</head>
<body>
<div id="wrapper">
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">	
					<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Interface</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Add</a></li>
                            
                            <li><a href="update.php" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Update</a></li>

					   </ul>
                    </li>
					 <li>
                        <a href="excel.php" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Excel file</span> </a>
                    </li>
                </ul>
            </div>
			</div>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Excel file</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	 
    
</div>
<!--Upload File Excel-->
<div style="padding: 20px">
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="excel"  size="50" style="padding-top: 20px; padding-bottom: 30px">
            <input type="submit" name="up" value="Upload">
		</form>			
<div>	

<?php
	require("upload.php");
	require("process_excel.php");

	upload_excel_file('up', 'excel');
	$file = return_name_fx('up', 'excel');
	if(isset($_POST["up"]))
	{
		$data = process_Excel($file);
		$doc = $data[0][2];
		$question = $data[0][5];
		$answer = $data[0][6];
		$status = $data[0][7];
		$raise_by = $data[0][8];
		$date_raised = $data[0][9];
		$pic_answer = $data[0][10];
		$require_fd = $data[0][13];
		$date_closed = $data[0][14];
		$result = $list->add_Data($doc, $question, $answer, $status, $raise_by, $date_raised, $pic_answer, $require_fd, $date_closed);
		if($result)
		{
			echo "<br/>Thành cmn công !";
		}
		else
		{
			echo "LOST!";
		}
	}
	
?>

<div class="copy">
            <p> &copy; 2017 FPT Fresher Academy - C89_ HCM_FR_PHP</p>	    
</div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>
