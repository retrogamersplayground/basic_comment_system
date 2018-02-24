<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "comments";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connection_error) {
    die("Connection failed" . $conn->connection_error);
}



$name = mysqli_real_escape_string($conn, $_POST['name']);
$comments = mysqli_real_escape_string($conn, $_POST['comment']);



 
$sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comments')";

if($conn->query($sql) === TRUE) {

echo "Record added successfully";

}

else {

echo "error adding record" . $sql . "</br>" . $conn->error;
}

header ("Location: index.php");
$conn->close();

?>