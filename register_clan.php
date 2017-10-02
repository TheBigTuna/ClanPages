<?php include "db_operations.php" ?>

<?php
  db_query("INSERT INTO clans (clan_name, clan_description, clan_logo) VALUES ('" . $_POST[name] . "', '" . $_POST[description] . "', 'images/user_icons/" . basename($_FILES[logo][name]) . "')");
  $current_clan = db_select("SELECT * FROM clans WHERE clan_name='" . $_POST[name] . "'");
  echo $current_clan[0][clan_id];
  db_query("INSERT INTO user_clan_mapping (user_id, clan_id) VALUES (1, " . $current_clan[0][clan_id] . ")");
  move_uploaded_file($_FILES[logo][tmp_name], "images/user_icons/" . basename($_FILES[logo][name]));
  include "index.php";
?>
