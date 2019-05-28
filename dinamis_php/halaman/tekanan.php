<?php
 
$dataPoints = array(
	array("y" => 36, "label" => "Sunday"),
	array("y" => 37, "label" => "Monday"),
	array("y" => 35, "label" => "Tuesday"),
	array("y" => 32, "label" => "Wednesday"),
	array("y" => 30, "label" => "Thursday"),
	array("y" => 36, "label" => "Friday"),
	array("y" => 37, "label" => "Saturday")
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Tekanan dalam seminggu"
	},
	axisY: {
		title: "Tingkat tekanan"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>