<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
</head>
<body>
 
    <?php
    $log = file("/path/to/MinecraftServer/logs/latest.log");
    $log = array_slice($log,-10);//the last 10 lines
    foreach($log as $lines) {
	echo "$lines<br />";
	}
     ?>
</body>
     
</html>
