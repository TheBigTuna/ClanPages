<?php include "nav-logged-out.php" ?>
<?php
	if (!function_exists("db_query")) {
		include dirname(__FILE__) . "/../db_operations.php";
	}
	?>

<div class="container jumbotron text-center mt-5">
	<div class="">
		<h1 class="display-3 mt-0 mb-4" style="font-size:3.65rem;margin-top:-.5rem !important">Get your community connected.</h1>
		<form action="create-clan.php">
			<button type="submit" class="btn btn-success btn-lg">Create Your ClanPage</button>
		</form>
		<form method="" action="" class="mt-5">
			<div class="row justify-content-md-center">
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon"> <i class="fa fa-search"></i>
						</span> <input type="text" class="form-control"
						placeholder="Search for your clan...">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="container">

	<?php
	$counter = 0;
	$numOfCols = 3;
	$rowCount = 0;

	$result = db_select("SELECT * FROM clans");
	if ($result == false) {
		//$error = db_error();
	}
	?>

	<div class="row justify-content-center">
		<?php
		if (is_array($result) || is_object($result))
		{
			foreach($result as $row) { ?>
				<div class="col-lg-4 col-md-12 profile-col">
					<a href="clan_page.php?name=<?php echo(strtolower($row['clan_name'])) ?>">
						<div class="media" data-toggle="" data-target="">
							<img class="d-flex align-self-center mr-3 rounded" width="80" height="80"
							src="<?php echo($row['clan_logo'])?>"
							alt="Generic placeholder image">
							<div class="media-body">
								<h5 class="mt-2 mb-2"><?php echo($row['clan_name']) ?></h5>
								<h6 class="mb-0"><?php echo($row['clan_description']) ?></h6>
								<!-- <a href="<?php //echo(strtolower($row['clan_name'])) ?>".".php" class="pull-right" style="font-size: 0.8rem;">More
								Info &rarr;</a>-->
							</div>
							<!-- media-body -->
						</div>
						<!-- media -->
					</a>
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
