<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>
<form action="<?php echo url('/blog/newEntryView')?>" method="post">
<?php echo csrf_field(); ?>
<table>
	<tr > 
	<td colspan="2" >Add Blog Enrty</td>
	</tr>
	<tr>
		<td>Title:</td>
		<td><input type="text" name="title"></td>
	</tr>
	<tr>
		<td>Content:</td>

		<td> <textarea name="content" cols="30" rows="10"></textarea></td>
	</tr>
	<tr>
		<td>Sender:</td>
		<td><input type="text" name="sender"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Submit"></td>
	</tr>
</table>
</form>
</body>
</html>