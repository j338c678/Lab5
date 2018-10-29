<?php
$user= $_POST['user'];
$mysqli = new mysqli("mysql.eecs.ku.edu","j338c678","moh3thoh","j338c678");

if($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_errno);
  exit();
}


$query="INSERT INTO Users (user_id) VALUES ('$user')";

if($user == "")
{
  echo "The user left the text field can not be empty <br>";
}

elseif($result = $mysqli->query($query))
{
  echo "a new user is stored in datebase sucessfully";
}

else
{
  echo "submisstion failed";
}
/* free result set */
    $result->free();


/* close connection */
$mysqli->close();
?>
