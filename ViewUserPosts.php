<html>
  <body>
    <table>
<?php

  $select = $_POST["n"];
  $mysqli = new mysqli("mysql.eecs.ku.edu","j338c678","moh3thoh","j338c678");
  if($mysqli->connect_errno)
  {
    printf("Connection Failed! %s\n",$mysqli->connect_error);
    exit();
  }
    $query = "SELECT content FROM Posts WHERE author_id = '$select'";
    if($result=$mysqli->query($query))
    {
      if(mysqli_num_rows($result)==0)
      {
        echo"empty post!";
      }
      else
      {
        while($row=$result->fetch_assoc())
        {
            echo "<tr><td>".$row["content"]."</td></tr>";
        }
      }
    }
    $mysqli->close();
?>
</table>
  </body>
  </html>
