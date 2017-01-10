<?php
session_start();

$db = new mysqli("server", "user", "pass", "db");


$sum = 0;
$query = "select time from timer";
$result = $db->query($query);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$sum = $sum + $row['time'];
	}$sum = $sum/60;
	print ("<h1>You have worked for " . $sum/60 . " hours, which is " . $sum ." minutes<br><br></h1>");
}else{
	print "here";
}
?>
