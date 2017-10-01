<?php include "db_operations.php" ?>
<?php

    $current_user = db_select("SELECT * FROM users WHERE user_id = $_POST('userid'));
    echo $current_user[0][user_name];
?>
