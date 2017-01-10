<?php
include("include.php");

$begin = $_SESSION['begin'];
$end = time();
$new = $end - $begin;
$query = "insert into timer values(0,".$begin.", ".$end.", ".$new.")";
if($db->query($query)){
	header("Location: index.php");
}else{
	echo $db->error;
}
?>
