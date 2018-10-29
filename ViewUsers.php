<?php
$select= $_POST['user'];
$mysqli = new mysqli("mysql.eecs.ku.edu","j338c678","moh3thoh","j338c678");

if($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_errno);
  exit();
}


$query = "SELECT user_id FROM Users";

echo "<table>";
echo "<tr><th>List of Users</th></tr>";

if($result =$mysqli->query($query))
{


    while($row = $result->fetch_assoc())
    {
     $user = $row['user_id'];
     echo "<tr><td>$user</td></tr>";
    }
  
}
echo "</table>";

/* free result set */

    $result->free();


/* close connection */
$mysqli->close();
?>
