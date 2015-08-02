<?php
$id = $_REQUEST['id'];

$object = array(
	'title' => '',
	'question' => '',
	'description' => '',
	'code' => '',
	'date' => '',
	 );

//Database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

//create a connection
$connection = new mysqli($servername, $username, $password);

//check for errors
if ($connection->connect_error){
	echo 'Connection failed: '. $connection->connect_error;
	exit;
}

//otherwise, connection successfully
echo "connected successfully";

//connect to the database
$connection->select_db('fitl');

$sql = 'SELECT * FROM pairs WHERE id = '. $id;

//Execute query
$result = $connection->query($sql);

//Get the object
if ($result->num_rows >0){
	$object = $result->fetch_assoc();
	//echo '<pre>';
	//print_r($object);
	//print_r($result);
	//print_r($connection);
	//echo '/pre>';
}


?>
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