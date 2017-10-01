<?php include "db_operations.php" ?>

<?php
<<<<<<< HEAD
  db_query("INSERT INTO clans (clan_name, clan_description, clan_logo) VALUES ('" . $_POST[name] . "', '" . $_POST[description] . "', 'images/user_icons/" . basename($_FILES[logo][name]) . "')");
  move_uploaded_file($_FILES[logo][tmp_name], "images/user_icons/" . basename($_FILES[logo][name]));
=======
  db_query("INSERT INTO clans (clan_name, clan_description) VALUES ('" . $_POST[name] . "', '" . $_POST[description] . "')");

>>>>>>> 28b73743e8f309b087d8715f3391749a5ab4964d
  include "index.php";
?>
