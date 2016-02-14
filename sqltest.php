<!DOCTYPE html>

<html>
<head></head>

<body>
<?php

$db = new SQLite3('db/Chinook_Sqlite.sqlite');
$query = "
SELECT Artist.Name, Album.Title FROM Artist, Album
WHERE Artist.ArtistId = Album.ArtistId
";

$result = $db->query($query);

$row = "blah";

while ($row != null) {
  $row = $result->fetcharray();
  echo " ".$row[0]." ".$row[1]." ".$row[2]." ".$row[3]."<br>";
  echo count($row);
}
?>
</body>
</html>
