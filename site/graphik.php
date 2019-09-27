<?php
 
$limit = 50000;
$y = 100;
$dataPoints = array();
for($i = 0; $i < $limit; $i++){
	$y += rand(0, 10) - 5; 
	if($i == 1)
		array_push($dataPoints, array("x" => "a", "y" => $y));
	else array_push($dataPoints, array("x" => $i, "y" => $y));
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Підтвердження</title>
	<meta name="description" content="Анкета відвідувача консульства">
	<meta name="keyworld" content="консульство, анкета консульства, анкета">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
window.onload = function () {
	
var data = [{
		type: "line",                
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}];
	
//Better to construct options first and then pass it as a parameter
var options = {
	zoomEnabled: true,
	animationEnabled: true,
	title: {
		text: "Заповнення анкет по даті"
	},
	axisY: {
		includeZero: false,
		lineThickness: 1
	},
	data: data  // random data
};
 
var chart = new CanvasJS.Chart("chartContainer", options);
chart.render();
 
}
</script>
<style>
	#timeToRender {
		position:absolute; 
		top: 10px; 
		font-size: 20px; 
		font-weight: bold; 
		background-color: #d85757;
		padding: 0px 4px;
		color: #ffffff;
	}
</style>
</head>
<body>
  <div class="header">
      <div class="logo">
        <div class="logotext">
          <h1 style="margin-top: 0px;">
          <a href="index.php">Консульство</a></h1>
         </div>
       </div>
</div>

<div class="main">
 <div>

    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

 </div>
</div>

</body>
</html>