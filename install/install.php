<br/>
<a href="../index.html">Go Back To Home</a>
<br/>
<?php

error_reporting(E_ALL ^ E_DEPRECATED);
//attempt connection
$connection = mysqli_connect("localhost","dev","Dev123");

// chect connection
if($connection===false){
	die("Error: could not connect. " .mysqli_connect_error());
			}
		
			
// Attempt to create database query

 $sql = "CREATE DATABASE mrc_lib";
 if(mysqli_query($connection, $sql)){
	echo "Database create successfully ";
	}
	else{
		echo "Could not able to execute &sql."
	.mysqli_error($connection);
	}
	 
	
	//attempt connection
$connection = mysqli_connect("localhost","dev","Dev123","mrc_lib");


	// Attempt to create table query execution
 $sql = "CREATE TABLE books (title CHAR(30) NOT NULL, mat_type INT(10) NOT NULL ,avail CHAR(10) NOT NULL, barcode_num INT(25) NOT NULL PRIMARY KEY, Author VARCHAR(50) NOT NULL, year INT(4) NOT NULL)";
	if (mysqli_query($connection, $sql)){
		echo "| Table books created successfully"; }
	else { 
			echo "ERROR: could not execute &sql." .mysqli_error($connection);
				} 
				
			
				//attempt connection
$connection = mysqli_connect("localhost","dev","Dev123","mrc_lib");


	// Attempt to create table query execution
$sql = "CREATE TABLE publisher (pub_id INT(10) NOT NULL PRIMARY KEY, address VARCHAR(100) NOT NULL, Name VARCHAR(50) NOT NULL)";
	if (mysqli_query($connection, $sql)){
		echo "| Table publisher created successfully"; }
	else { 
			echo "ERROR: could not execute &sql." .mysqli_error($connection);
				}
				
				
				
				//attempt connection
$connection = mysqli_connect("localhost","dev","Dev123","mrc_lib");


	// Attempt to create table query execution
$sql = "CREATE TABLE members (status CHAR(25) NOT NULL, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, site CHAR(50) NOT NULL, section VARCHAR(100) NOT NULL, line_manager CHAR(100),  mrc_num INT(8) NOT NULL PRIMARY KEY)";
	if (mysqli_query($connection, $sql)){
		echo "| Table member created successfully"; }
	else { 
			echo "ERROR: could not execute &sql." .mysqli_error($connection);
				} 
	
	
	// Close connection 
	mysqli_close($connection);
	
 ?>