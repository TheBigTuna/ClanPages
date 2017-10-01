<?php include "db_operations.php" ?>
<?php
    $current_user = db_select("SELECT * FROM users WHERE user_id ='" . $_POST['userid'] . "'");
    echo $current_user[0]['user_name'];
?>
    <ul class="list-group z-depth-0">
        <li class="list-group-item justify-content-between">Bio: <?php echo $current_user[0]['user_bio']; ?></li>
        <li class="list-group-item justify-content-between">Location: <?php echo $current_user[0]['user_location']; ?></li>
        <li class="list-group-item justify-content-between">Major: <?php echo $current_user[0]['user_major']; ?></li>
        <li class="list-group-item justify-content-between">Skills: <?php echo $current_user[0]['user_skills']; ?></li>
    </ul>
