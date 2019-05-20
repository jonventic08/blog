<!DOCTYPE html>
<html>
<head>
	<title>Blog List</title>
</head>
<body>
Blogs 
<div>
	<?php
	$i = 0;
	foreach ($blogs as $blog) {
	 
		
	?>

	<h1><?php echo $blog['title']; ?></h1>
	<p><?php echo $blog['content']; ?></p>
	<p><a href="/blogList/<?php echo $i ?>/view"> view details </a></p>
	<?php
	$i++; 
		}
	 ?>
</div>
</body>
</html>