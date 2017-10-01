<?php include "db_operations.php" ?>

<?php
  db_query("INSERT INTO clans (clan_name, clan_description) VALUES ('" . $_POST[name] . "', '" . $_POST[description] . "')");

  include "index.php";
?>
