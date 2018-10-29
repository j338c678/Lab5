
<?php
$user = $_POST['user'];
$post = $_POST['post'];
$mysqli=new mysqli("mysql.eecs.ku.edu", "j338c678", 'moh3thoh', "j338c678");
/* check connection */
if ($mysqli->connect_errno)
 {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
 }

$query = "SELECT user_id FROM Users WHERE user_id = '$user'";
$query1 = "INSERT INTO Posts (content, author_id) VALUES ('$post', '$user')";


if($post == "")
{
  echo "post can not be empty";
}
else
 {
   if($result = $mysqli->query($query)->fetch_assoc())
   {
     if($result1 =$mysqli->query($query1))
     {
       echo "post was added";
     }
     else
      {
       echo "submission faild";
      }
   }
   else
    {
      echo"user is not in datebase";
    }
 }

$result->free();
$result1->free();

 $mysqli->close();
 ?>
