<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User list - SebastianBaezCode</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="content" content="This is a test of laravel view">
</head>
<body>
	<h1><?php printf($title); ?></h1>
	<ul>
		<?php foreach($users as $user): ?>
			<li><?php printf(e($user)); ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>