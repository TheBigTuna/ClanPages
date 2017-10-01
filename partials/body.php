<?php include "nav.php" ?>

<div class="container jumbotron text-center">
	<div class="">
		<div class="text-center">
			<img src="http://lorempixel.com/100/100/" class="rounded" alt="">
		</div>
		<h1 class="display-4 mt-3">Oakland University Intl. Students</h1>
		<p class="lead">Add your profile and get to know your fellow international students at Oakland University.</p>
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
	?>

	<div class="row justify-content-center">
		//todo make call
		<?php for($i=1;$i<3;$i++) { ?>
			<div class="col-lg-4 col-md-12 profile-col">
				<div class="media" data-toggle="modal" data-target="#basicExample">
					<img class="d-flex align-self-center mr-3 rounded"
						src="http://lorempixel.com/80/80/people/<%=counter%>"
						alt="Generic placeholder image">
					<div class="media-body">
						<h5 class="mt-2 mb-2">${person.name}</h5>
						<h6>${headlines[loopCount.index]}</h6>
						<h6 class="mb-0">${locations[loopCount.index]}</h6>
						<a href="#" class="pull-right" style="font-size: 0.8rem;">More
							Info &rarr;</a>
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
			}
			?>

	</div>
</div>
<?php include "full-profile-modal.php" ?>
