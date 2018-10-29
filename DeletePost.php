<?php
      $mysqli = new mysqli("mysql.eecs.ku.edu", "j338c678","moh3thoh","j338c678");
      if ($mysqli->connect_errno)
      {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
      }
      $counter = $_POST["posts"];
      if (count($counter) == 0)
      {
        echo "empty list";
      }
      else
      {
        for($i=0;$i<count($counter);$i++)
        {
          $target = $counter[$i];
          $query = "DELETE FROM Posts WHERE post_id = '$target'";
          if ($result = $mysqli->query($query))
          {
            echo "<p>$target</p>";
            echo "<br>";
          }
        }
      }
      $result->free();
      $mysqli->close();
?>
