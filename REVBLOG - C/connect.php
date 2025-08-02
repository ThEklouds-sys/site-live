<?php

$textArea = $_POST['textArea'];

 /* Database connection*/

$conn = new mysqli('localhost','root','','revblog');
 if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
 } 
  $sql = "INSERT INTO posts (input) VALUES (?)";
  $stmt = $conn->prepare($sql);

if ( $stmt === false){
    die( "Prepare failed: ". $conn->error);
} 

        $stmt->bind_param("s",$textArea);
        $stmt->execute();
     echo "THANKS FOR YOUR OPINION"

?>
