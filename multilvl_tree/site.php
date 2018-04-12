<?php
header("Content-Type:text/html;charset=UTF8");

include 'config.php';
include 'functions.php';

connect(HOST,USER,PASS,DATABASE);

$result = get();
?>

<html>

	<head>
		<meta charset="UTF-8"/>
		<title>Multitree</title>
		<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="showhide_script.js"></script>
		<style>
		
		</style>
	</head>
	
	<body>
		<?php echo display($result); ?>
	</body>	
	
</html>