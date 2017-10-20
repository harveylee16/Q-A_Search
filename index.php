
<?php
	require('process.php');
	// print_r($data);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/q&a.jpg">
<title>Search Q&A</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/table.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<a href="index.php"><image id="logo" src="images/fsoft.jpg"></image></a>
	<div class="main">
		<h1>Fresher Academy 2017</h1>
		<h3>Q&A Search Box</h3>
		<div class="search">
			<form method="post" action="index.php">
				<input type="text" id="gia_tri" name="gia_tri" placeholder="Enter the question..." autofocus="index.php" >
				<input type="submit" id="search" name="search" value="Search">
				<div class="clear"></div>
			</form>
		</div>
		
	<?php
	if(isset($_POST["search"])&& $_POST["gia_tri"])
	{
		$gia_tri = $_POST["gia_tri"]; 

		// for($i=0; $i < count($data); $i++)
		// {
		// 	if(strpos($data[$i][2], $gia_tri) == 0)
		// 	{
		// 		$flag = 0;
		// 		echo $flag;
		// 	}
		// 	else
		// 	{
		// 		$flag = 1;
		// 	}
		// }
		// if($flag == 0)
		// {
		// 	echo "<p align = center><font size=5; color=red>No Result...</font></p>";
		// }
		// else 
		// {
	?>

	<div class="divTable blueTable">
	<div class="divTableHeading">
	<div class="divTableRow">
	<div class="divTableHead">STT</div>
	<div class="divTableHead">Document</div>
	<div class="divTableHead">Status</div>
	<div class="divTableHead">Raised by</div>
	<div class="divTableHead">Detail</div>
	</div>
	</div>
	<div class="divTableBody">
	<?php
		$count = 0;
		for($i=0; $i < count($data); $i++)
		{
			if(strstr(strtolower($data[$i][2]), strtolower($gia_tri)))
			{
	?>
		<div class="divTableRow">
		<div class="divTableCell"><?php echo $data[$i][0]?></div>
		<div class="divTableCell"><?php echo $data[$i][2]?></div>
		<div class="divTableCell"><?php echo $data[$i][7]?></div>
		<div class="divTableCell"><?php echo $data[$i][8]?></div>
		<div class="divTableCell"><a href="detail.php?ct=<?php echo $i?>">More</a></div>
		</div>
	<?php
			$count++;		
			}
		}
	?>
	</div>
	</div>
	<!-- <div class="blueTable outerTableFooter">
	<div class="tableFootStyle">
	<div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
	</div>
	</div> -->
	<p style="color: red">Total: <?php echo $count ?> result</p>
	<?php
		}
	?>
	
		<p align="center">Copyright © 2017 Stytlish Search Q&A C89_HCM_FR_PHP. All Rights Reserved </p>
	</div>
</body>
</html>