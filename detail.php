<?php
	require("process.php");
	$i = $_GET["ct"];
	// echo $ct;
	// echo "pre"; print_r($data);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail <?php echo $data[$i][2] ?></title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  } );
  </script>
  <style>
  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
  </style>
</head>
<body>
<div id="tabs">
  <ul>
    <li><a href="#stt">#</a></li>
    <li><a href="#funcare">Function area</a></li>
    <li><a href="#doc">Document</a></li>
    <li><a href="#docver">Doc Version</a></li>
    <li><a href="#secsc">Section/screen</a></li>
    <li><a href="#cq">Comment/Question</a></li>
    <li><a href="#ans">Answer</a></li>
    <li><a href="#sta">Status</a></li>
    <li><a href="#rasb">Raised by</a></li>
    <li><a href="#dara">Date raised</a></li>
    <li><a href="#pican">Pic Answer</a></li>
    <li><a href="#prio">Priority</a></li>
    <li><a href="#civ">Closed In Version</a></li>
    <li><a href="#rfd">Required finish date</a></li>
    <li><a href="#dac">Date closed</a></li>
  </ul>
  <div id="stt">
    <h2><?php echo $data[$i][0]?></h2>
    <p></p>
  </div>
  <div id="funcare">
    <h2><?php echo $data[$i][1]?></h2>
    <p></p>
  </div>
  <div id="doc">
    <h2><?php echo $data[$i][2]?></h2>
    <p></p>
  </div>
  <div id="docver">
    <h2><?php echo $data[$i][3]?></h2>
    <p></p>
  </div>
  <div id="secsc">
    <h2></h2>
    <p><?php echo $data[$i][4]?></p>
  </div>
  <div id="cq">
    <h2></h2>
    <p><?php echo $data[$i][5]?></p>	
  </div>
  <div id="ans">
    <h2></h2>
    <p><?php echo $data[$i][6]?></p>
  </div>
  <div id="sta">
    <h2><?php echo $data[$i][7]?></h2>
    <p></p>
  </div>
  <div id="rasb">
    <h2><?php echo $data[$i][8]?></h2>
    <p></p>
  </div>
  <div id="dara">
    <h2><?php echo $data[$i][9]?></h2>
    <p></p>
  </div>
  <div id="pican">
    <h2></h2>
    <p><?php echo $data[$i][10]?></p>
  </div>
  <div id="prio">
    <h2></h2>
    <p><?php echo $data[$i][11]?></p>
  </div>
  <div id="civ">
    <h2><?php echo $data[$i][12]?></h2>
    <p></p>
  </div>
  <div id="rfd">
    <h2><?php echo $data[$i][13]?></h2>
    <p></p>
  </div>
  <div id="dac">
    <h2><?php echo $data[$i][14]?></h2>
    <p></p>
  </div>
</div> 
</body>
<a href="index.php"><<< Back<a/>
</html> 