<!DOCTYPE html>
<html lang="en">
<head>
	<title>Members</title>
</head>
<body>
<h1></h1>
<h1> List of Members </h1>
<div>
<?php foreach ($members as $member){
		
 ?>
	<h2><?php echo $member['memberfname']; ?> </h2>
	<p><?php echo $member['memberlname']; ?> </p>
	<p><a href="http://127.0.0.1:8000/member/<?php echo $member['memberid']; ?>/view "> view details</a></p>
	<?php } ?>
</div>
</body>
</html>