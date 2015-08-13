<?php

//attempt connection
$connection = mysqli_connect("localhost","dev","Dev123","mrc_lib");

// chect connection
if($connection===false){
	die("Error: could not connect. " .mysqli_connect_error());
			}
//$select_db = mysql_select_db("mrc_lib")or die("unable to select database".mysql_error());

$stat=$_POST['status'];
$f_name=$_POST['fn'];
$l_name=$_POST['ln'];
$site=$_POST['site'];
$sec=$_POST['section'];
$l_manager=$_POST['lm'];
$m_num=$_POST['mn'];


$query = "INSERT INTO members(status,first_name,last_name,site,section,line_manager,mrc_num) VALUES('{$stat}','{$f_name}','{$l_name}','{$site}','{$sec}',
'{$l_manager}','{$m_num}')";
if(mysqli_query($connection,$query)){
header("Location: create_new_mem.html");
exit();
} else 
echo "we have an error";

// Close connection 
	mysqli_close($connection);

?>