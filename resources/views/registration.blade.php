<!DOCTYPE html>
<html>
<head>
	<title>Register Here!</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>

<body>
	<div class="container">
<form class="form-horizontal" action="<?php echo url('/member/Save')?>" method="post">
  <div class="form-group">
  	<?php echo csrf_field(); ?>
    <label for="email">Member First Name:</label>
    <input type="text" name="memberfname" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Member First Name:</label>
    <input type="text" name="memberlname" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html>