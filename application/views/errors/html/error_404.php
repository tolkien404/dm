<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

.page-error .error-mark {
  margin-bottom: 33px;
}

.page-error header h1 {
  font-size: 10em;
  font-weight: 400;
}

.page-error header p {
  margin-bottom: 30px;
  font-size: 30px;
  text-transform: uppercase;
}

.page-error h2 {
  margin-bottom: 30px;
}

.page-error .error-advise {
  margin-bottom: 25px;
  color: #a9afb5;
}
</style>
</head>
<body>


	<div id="container">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
		<p class="error-advise">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
        <a class="btn btn-primary btn-round" href="#">GO TO HOME PAGE</a>
	</div>
</body>
</html>