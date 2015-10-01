<?php
	$msg = isset($_REQUEST['msg'])?$_REQUEST['msg']:'';
?>

<!DOCTYPE html>
<head>
<title>Web Survey</title>
<link rel="stylesheet" href="view/main.css" type="text/css">
</head>
<body>
<center>
<div><h3 style="color:#F0C"><?php echo $msg; ?></h3></div>
<div id="body_sur">
<div id="header3"><h1>Web Survey <a href="index.php?logout=yes&msg=Log Out Successfully" style="color:#FFFFFF">Log Out</a> </h1></div>
<?php include("question_add.php");?>
<div id="footer_sur"></div>	
</div>
</div>
</body>
</html>