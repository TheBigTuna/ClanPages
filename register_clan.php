<?php include "db_operations.php" ?>

<?php
  db_query("INSERT INTO clans (clan_name, clan_description, clan_logo) VALUES ('" . $_POST[name] . "', '" . $_POST[description] . "', 'images/user_icons/" . basename($_FILES[logo][name]) . "')");
  move_uploaded_file($_FILES[logo][tmp_name], "images/user_icons/" . basename($_FILES[logo][name]));
  include "index.php";
?>
