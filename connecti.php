<?php
$name=filter_input(INPUT_POST, 'name');
$email=filter_input(INPUT_POST, 'email');
$message=filter_input(INPUT_POST, 'message');
if (!empty($name)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mydatabase";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO mytable (name, email, message)
values ('$name','$email','$message')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Email should not be empty";
die();
}
}
else{
echo "Name should not be empty";
}
die;

?>