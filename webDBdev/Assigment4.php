<html>
<head>
<style>
body {
	color: black;
	font-family: helvetica;
	background-color: #e2e2e2;
}

table {
	text-align: left;
	padding-bottom: 100;
}

th {
	border-bottom: 1px solid #C5B358;
	padding: 10;
}

td {
	border-bottom: 1px solid #C5B358;
	padding: 10px;
}

tr:hover {
	background-color: #f5f5f5;
}
<?php
print "<h1 style = \" text-align: center ;\">4.1</h1>"; 

	 $v1 = 1;
	 $v2 = 2;
	 
	 echo "<table>
		<tr>
			<th>vablus</th>
			<th>v1</th>
			<th>v2</th>
		</tr>
	echo "<tr>
		<td></td>
		<td>$v1</td>
		<td>$v2</td>
	</tr>";
	$v1--;
	echo "<tr>
			<td>--v1</td>
			<td>$v1</td>
			<td>$v2</td>
		</tr>";
	$v1=--$v1/$v2; 
	echo "<tr>
			<td>v1=--v1/v2</td>
			<td>$v1</td>
			<td>$v2</td>
		</tr>";
	$v1=($v2*3)+14.5;
	echo "<tr>
			<td>v1=(v2*3)+14.5</td>
			<td>$v1</td>
			<td>$v2</td>
		</tr>";
	$v2 +=$v1;
	echo "<tr>
			<td>v2 +=v1</td>
			<td>$v1</td>
			<td>$v2</td>
		</tr>";
	$v2 *= $v2;
	echo "<tr>
			<td>v2 *= v2</td>
			<td>$v1</td>
			<td>$v2</td>
		</tr>";
	echo "</table>";

print "<h1 style = \" text-align: center ;\">4.2</h1>";	

    $wp = 200;
	$hI = 193.04;
	$BMI = 0;
function1($hI, $wp)
{
	$BMI = ($wp*703)/($hI1*$hI2);
	 
    switch ($BMI < 18.5)
		$BMIResult = "Underweight";
			break;
		case $BMI >= 18.5 && $bmi < 25:
			$BMIResult = "Normal";
			break;
		case $bmi >= 25 && $bmi < 30:
			$BMIResult = "Overweight";
			break;
		case $BMI >=30:
			$BMIResult = "Obese";
			break;			
		default: 
			$BMIResult = "Unknown";
	}	
	return $BMIResult;
}

print "<h1 style = \" text-align: center ;\">4.3</h1>";


function3($a)
{
$p = 0;
	echo "<table>
		<tr>
			<th>Radius</th>
			<th>Circumference</th>
			<th>Area</th>
		</tr>";
	while($a>=$b) {
		$radius = $r;
		$circum = 2*3.14*$r;
		$area = 3.14*($r*$r);
		echo "<tr>
			<td>$radius</td>
			<td>$circum</td>
			<td>$area</td>
		</tr>";
		$p++;
	}
	echo "</table>";
?>