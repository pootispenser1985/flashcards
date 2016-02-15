<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
  $db = new SQLite3('db/flashcards.db');
  $query = "SELECT COUNT(*) FROM flashcards";
  $result = $db->query($query);
  $row = $result->fetchArray();

  echo "\$row[0]:  ".$row[0]."<br>";
  echo "\$row[1]:  ".$row[1]."<br>";
  echo "<br><br><br><br>Sanity Check";

 ?>

</body>
</html>
