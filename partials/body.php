<?php include "nav.php" ?>
<?php include dirname(__FILE__) . "/../db_operations.php" ?>

<?php
	$link = $_SERVER['PHP_SELF'];
	$link_array = explode('/',$link);
	$page = end($link_array);
	$formattedPage = substr(strtolower($page), 0, strlen($page) - 4);
	$current_clan = db_select("SELECT * FROM clans WHERE LOWER(clan_name)='" . $formattedPage . "'");
?>

<div class="container jumbotron text-center">
	<div class="">
		<div class="text-center">
			<img src="<?php echo($current_clan[0]['clan_logo'])?>" width="120px" height="120px" class="rounded" alt="">
		</div>
		<h1 class="display-4 mt-3"><?php echo($current_clan[0]['clan_name'])?></h1>
		<p class="lead"><?php echo($current_clan[0]['clan_description'])?></p>
		<form method="" action="" class="mt-5">
			<div class="row justify-content-md-center">
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon"> <i class="fa fa-search"></i>
						</span> <input type="text" class="form-control"
							placeholder="Search profiles...">
					</div>
				</div>
			</div>
		</form>
		<div class="row justify-content-md-center mt-3">
			<div class="col-8 text-center">
				<span>Popular Tags:</span>&nbsp;&nbsp;
				<button class="btn btn-success btn-sm my-1">Software Engg</button>
				<button class="btn btn-success btn-sm my-1">Designer</button>
				<button class="btn btn-success btn-sm my-1">F1</button>
				<button class="btn btn-success btn-sm my-1">CS5340</button>
				<button class="btn btn-success btn-sm my-1">India</button>
				<button class="btn btn-success btn-sm my-1">Pune</button>
				<button class="btn btn-success btn-sm my-1">Accommodation</button>
			</div>
		</div>
	</div>
</div>

<div class="container">

	<?php
		$counter = 0;
		$numOfCols = 3;
		$rowCount = 0;

		$result = db_select("SELECT * FROM users");
		if ($result == false) {
			$error = db_error();
		}
	?>

	<div class="row justify-content-center">
		<?php
		if (is_array($result) || is_object($result))
		{
		foreach($result as $row) { ?>
			<div class="col-lg-4 col-md-12 profile-col">
				<div class="media" data-toggle="modal" data-id="<?php echo($row['user_id']) ?>" data-target="#basicExample">
					<img class="d-flex align-self-center mr-3 rounded" width="80" height="80"
						src="<?php echo($row['user_profile_url'])?>"
						alt="Generic placeholder image">
					<div class="media-body">
						<h5 class="mt-2 mb-2"><?php echo($row['user_name']) ?></h5>
						<h6><?php echo($row['user_location']) ?></h6>
						<h6 class="mb-0"><?php echo($row['user_major']) ?></h6>
					</div>
					<!-- media-body -->
				</div>
				<!-- media -->
			</div>
			<!-- col -->

			<?php
					$counter++;
					$rowCount++;
					if ($rowCount % $numOfCols == 0) {
						echo ("</div><div class='row justify-content-center'>");
					}
			}}
			?>

	</div>
</div>
<?php include "full-profile-modal.php" ?>
