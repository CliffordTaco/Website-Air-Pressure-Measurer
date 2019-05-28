<?php
 
$dataPoints = array(
	array("y" => 100, "label" => "Sunday"),
	array("y" => 200, "label" => "Monday"),
	array("y" => 125, "label" => "Tuesday"),
	array("y" => 150, "label" => "Wednesday"),
	array("y" => 175, "label" => "Thursday"),
	array("y" => 150, "label" => "Friday"),
	array("y" => 200, "label" => "Saturday")
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Ketinggian dalam seminggu"
	},
	axisY: {
		title: "Tingkat ketinggian dari bawah laut"
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