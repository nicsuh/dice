<?php
$input1 = array("1", "2", "3", "4", "5", "6");
$input2 = array("1", "2", "3", "4", "5", "6");


shuffle($input1);

if ($input1[array_rand($input1)] == 1){
	echo "<img src = d1.jpg>"; }
elseif ($input1[array_rand($input1)] == 2){
	echo "<img src = d2.jpg>";}
elseif ($input1[array_rand($input1)] == 3){
	echo "<img src = d3.jpg>";}
elseif ($input1[array_rand($input1)] == 4){
	echo "<img src = d4.jpg>";}
elseif ($input1[array_rand($input1)] == 5){
	echo "<img src = d5.jpg>";}	
else
	echo "<img src = d6.jpg>";
	
echo "  ";

shuffle($input2);

if ($input2[array_rand($input2)] == 1){
	echo "<img src = d1.jpg>"; }
elseif ($input2[array_rand($input2)] == 2){
	echo "<img src = d2.jpg>";}
elseif ($input2[array_rand($input2)] == 3){
	echo "<img src = d3.jpg>";}
elseif ($input2[array_rand($input2)] == 4){
	echo "<img src = d4.jpg>";}
elseif ($input2[array_rand($input2)] == 5){
	echo "<img src = d5.jpg>";}	
else
	echo "<img src = d6.jpg>";



?>
<html>
<body>
<br><br>
<button onclick="myFunction()">Roll Dice</button>

<script>
function myFunction() {
    location.reload();
}
</script>

</body>
</html> 
