<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "junior";

// Create connection
$conn = new mysqli("localhost","root","","junior");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/* $sql = "INSERT INTO students (name,matnum,discription,week2,week3,week5,week7,week9)
   VALUES('Abdoulie','2120155','Project Monitoring Site','Desingn My Project','Made The Database','Designed the backend','Designed the frontend','completed the project')"; 
   */
   
   
$sql = "INSERT INTO students(name,matnum,discription,week2,week3,week5,week7,week9)
   VALUES('Abdoulie Kassama','2120155','Project Monitoring Site','Desingn My Project','Made The Database','Designed the backend','Designed the frontend','completed the project');";
   
    
   
$sql .=  "INSERT INTO students(name,matnum,discription,week2,week3,week5,week7,week9)
   VALUES('Abubacarr Juwara','2120372','Voip Call Networking','Desingn My Project','Made The Database','Designed the backend','Designed the frontend','completed the project');";
   
    
   
$sql .= "INSERT INTO students(name,matnum,discription,week2,week3,week5,week7,week9)
   VALUES('Famara Bojang','2120030','ONLINE SHOPPING SITE','Desingn My Project','Made The Database','Designed the backend','Designed the frontend','completed the project');";
   
   
$sql .= "INSERT INTO students(name,matnum,discription,week2,week3,week5,week7,week9)
   VALUES('Modou lamin Bayo','2122071','School Management Software','Desingn My Project','Made The Database','Designed the backend','Designed the frontend','completed the project');";
   
$sql .= "INSERT INTO students(name,matnum,discription,week2,week3,week5,week7,week9)
   VALUES('Seedy Ahmed Jallow','2121210','PAndroid Development','Desingn My Project','Made The Database','Designed the backend','Designed the frontend','completed the project');";
   
$sql .=  "INSERT INTO students(name,matnum,discription,week2,week3,week5,week7,week9)
   VALUES('Alieu Jeng','2121301','Fashion Designers Website','Desingn My Project','Made The Database','Designed the backend','Designed the frontend','completed the project');";
   
$sql .=  "INSERT INTO students(name,matnum,discription,week2,week3,week5,week7,week9)
   VALUES('Sainy M Manneh','2120192','Website For An Association','Desingn My Project','Made The Database','Designed the backend','Designed the frontend','completed the project');";
   
$sql .= "INSERT INTO students(name,matnum,discription,week2,week3,week5,week7,week9)
   VALUES('Abdourahman Jallow','2121050','Clinical Management System','Desingn My Project','Made The Database','Designed the backend','Designed the frontend','completed the project')";    
   
   

   

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

 
?>