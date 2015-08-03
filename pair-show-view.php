<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['id']; ?></title>
	</head>
	<body>
		<h1><?php echo $object['studentId']; ?></h1>
		<p><?php echo $object['mentorId']; ?></p>
		<pre>
			<?php echo $object['startDate']; ?>
		</pre>
		<p>Question date: <?php echo $object['endDate']; ?></p>
	</body>

</html>