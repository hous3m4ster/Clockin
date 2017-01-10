<?php
include("include.php");

print ('
<a href="page2.php"><button>Clock out</button></a>
');
$_SESSION['begin'] = time();
?>
