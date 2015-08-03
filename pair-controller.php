<?php

$page = $_REQUEST['page'];

include 'database-connection.php';

//otherwise, connection successfully
echo "connected successfully";

//connect to the database
$connection->select_db('fitl');

//Determine what page to show
if ($page == 'show'){
	$id = $_REQUEST['id'];
	show($id);
}
elseif ($page == 'create') {
	create();
}
elseif ($page =='about') {
	about();
}

//load the show page
function show($id){
	global $connection;

	$object = array(
		'title' => '',
		'question' => '',
		'description' => '',
		'code' => '',
		'date' => '',
	);

	//Query to select the object
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

	//Load the iview-file
	include 'pair-show-view.php';

}
//Load the create page
function create(){
	include 'pair-create-view.php';
}

function about(){
	include 'pair-about-view.php';
}
?>