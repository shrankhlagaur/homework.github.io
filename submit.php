<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "test", "Asdf@1234", "test");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$occupation = mysqli_real_escape_string($link, $_REQUEST['occupation']);
 
// Attempt insert query execution
$sql = "INSERT INTO formdata (name, city, occupation) VALUES ('$name', '$city', '$occupation')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>