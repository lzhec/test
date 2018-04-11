<?php
header("Content-Type:text/html;charset=UTF8");

include 'config.php';
include 'functions.php';

connect(HOST,USER,PASS,DATABASE);

$result = get();

?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8"/>
	<title>Multitree</title>
	<script type="text/javascript" src="jq/jquery-3.3.1.min.js"></script> 
	<script type="text/javascript" src="jq/jstree/dist/jstree.js"></script>
	<link rel="stylesheet" href="jq/jstree/dist/themes/default/style.min.css">
	
</head>
	
<body>
	<div id="jstree">
		<ul>
			<?php echo $data = display($result)?>
		</ul>
	</div>
	<button>demo button</button>
  
  <script src="jq/jquery-3.3.1.min.js"></script>
  <script src="jq/jstree/dist/jstree.min.js"></script>
  <script>
  $(function (){
    
    $('#jstree').jstree();
    
    $('#jstree').on("changed.jstree", function (e, data) {
      console.log(data.selected);
    });
   
    $('button').on('click', function () {
      $('#jstree').jstree(true).select_node($data);
      $('#jstree').jstree('select_node', '$data');
      $.jstree.reference('#jstree').select_node('$data');
    });
  });
  </script>	
</body>	
	
</html>