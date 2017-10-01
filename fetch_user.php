<?php include "db_operations.php" ?>
<?php
    $current_user = db_select("SELECT * FROM users WHERE user_id = $_POST('userid'));
    echo $current_user[0]['user_name'];
?>
    <p>Bio: <?php echo $current_user[0]['user_bio']; ?></p>

    <ul class="list-group z-depth-0">
        <li class="list-group-item justify-content-between"><?php echo $current_user[0]['user_skills']; ?></li>
    </ul>
