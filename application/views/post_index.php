<html>
<head>
	<title>Test</title>
</head>
<body>
<?php if (!isset($posts)) { ?>
	nix gefunden

<? } else {

  	foreach ($posts as $row) {

  		echo ".";

 	}
   
   } ?>
</body>
</html>