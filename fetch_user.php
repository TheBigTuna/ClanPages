<?php include "db_operations.php" ?>
<?php
<<<<<<< HEAD
    $current_user = db_select("SELECT * FROM users WHERE user_id = $_POST('userid'));
=======
    $current_user = db_select("SELECT * FROM users WHERE user_id ='" . $_POST['userid'] . "'");
>>>>>>> 6949e117218ef6e10872818b7d458342f412cf56
    echo $current_user[0]['user_name'];
?>
    <p>Bio: <?php echo $current_user[0]['user_bio']; ?></p>

    <ul class="list-group z-depth-0">
        <li class="list-group-item justify-content-between"><?php echo $current_user[0]['user_skills']; ?></li>
    </ul>
