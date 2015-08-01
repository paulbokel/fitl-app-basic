<?php
$id = $_REQUEST['id'];
$title='';
$question = '';
$description = '';
$code = '';
$date = '';

if ($id ==1){
	$title= 'Logging mentoring';
	$question= 'Mentoring pairs';
	$description = 'The mentor and mentee that have been paired';
	$code = 'alert(This is an alert)';
	$date = 'August 1, 2015';
}
elseif ($id ==2) {
	$title= 'Logging mentoring';
	$question= 'Mentoring pairs';
	$description = 'Another question';
	$code = 'ibase_blob_add(blob_handle, data)';
	$date = 'August 31, 2016';
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<h1><?php echo $question; ?></h1>
		<p><?php echo $description; ?></p>
		<pre>
			<?php echo $code; ?>
		</pre>
		<p>Question date: <?php echo $date; ?></p>
	</body>

</html>