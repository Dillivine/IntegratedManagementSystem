<?php

//attempt connection
$connection = mysqli_connect("localhost","dev","Dev123","mrc_lib");

// chect connection
if($connection===false){
	die("Error: could not connect. " .mysqli_connect_error());
			}
//$select_db = mysql_select_db("mrc_lib")or die("unable to select database".mysql_error());

$title=$_POST['title'];
$mat_type=$_POST['mt'];
$ava=$_POST['avail'];
$bar=$_POST['bn'];
$aut=$_POST['au'];
$yr=$_POST['yr'];


$query = "INSERT INTO books(title, mat_type, avail, barcode_num, Author, year) VALUES('{$title}','{$mat_type}','{$ava}','{$bar}','{$aut}',
'{$yr}')";
if(mysqli_query($connection,$query)){
header("Location: add_new_book.html");
exit();
} else 
echo "we have an error";

// Close connection 
	mysqli_close($connection);

?>