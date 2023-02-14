<?php
try {
  $db = new PDO("mysql:host=;dbname=fietsenmaker","root","");
  $query = $db->prepare("SELECT * FROM fietsenmaker");
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach($result AS &$data) {
    echo "<a href='productpage.php?id=" . $data['id'] . "'>";
    echo $data["merk"] . " " . $data["type"];
    echo "</a>";
    echo "<br>";
  }
}  catch(PDOException $e) {
  die ("Error!:" . $e->getMessage());
}
?>