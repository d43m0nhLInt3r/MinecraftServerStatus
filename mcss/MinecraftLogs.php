<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
</head>
<body>
 
    <?php
    $log = file("/path/to/MinecraftServer/logs/latest.log");
    $log = array_slice($log,-10);
    foreach($log as $lines) {
	echo "$lines<br />";
	}
     ?>
</body>
     
</html>
