<div class="border-end bg-white" id="sidebar-wrapper">
	<div class="sidebar-heading border-bottom bg-light">learn@codeX</div>

	<div class="profile mt-4">
		<div class="text-center">
			<img class="profile-user-img img-fluid img-circle"
			src="assets/images/profile/lawrence.jpg"
			alt="User profile picture">
		</div>

		<h3 class="profile-username text-center"><?php echo $rsuser['username']; ?></h3>

		<p class="text-muted text-center g-font-size-14--md code-font">
			<i class="g-padding-r-5--xs ti-email g-font-size-14--md"></i>
			<?php echo $rsuser['email']; ?>
			<br>
			<i class="g-padding-r-5--xs ti-mobile g-font-size-14--md"></i>
			(+250)<?php echo $rsuser['phone']; ?>
			<br>
			<i class="g-padding-r-5--xs ti-location-pin g-font-size-14--md"></i>
			<?php 
				$countryId = $rsuser['country']; 
				countryName($countryId);
			?>
			<br>
			<i class="g-padding-r-5--xs ti-world g-font-size-14--md"></i>
			<?php echo $rsuser['website']; ?>

			<br>
			<button type="button" class="mt-2 mb-3 btn btn-success btn-sm g-hor-centered-row__col">Sync Resources</button>
		</p>

		
	</div>

	<div class="list-group list-group-flush">
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">
			<i class="g-padding-r-5--xs ti-desktop g-font-size-16--md"></i> Dashboard
		</a>
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="pages.php">
			<i class="g-padding-r-5--xs ti-layers g-font-size-16--md"></i> Pages
			<span class="float-end">
				(<?php userPageCount($usrId); ?>)
			</span>
		</a>
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="tools.php">
			<i class="g-padding-r-5--xs ti-notepad g-font-size-16--md"></i> Notes
			<span class="float-end">
				(<?php userNotesCount($usrId); ?>)
			</span>
		</a>
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="tools.php">
			<i class="g-padding-r-5--xs ti-zip g-font-size-16--md"></i> Tools
			<span class="float-end">
				(<?php userToolsCount($usrId); ?>)
			</span>
		</a>
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="resources.php">
			<i class="g-padding-r-5--xs ti-archive g-font-size-16--md"></i> Resources
			<span class="float-end">
				(<?php userResourcesCount($usrId); ?>)
			</span>
		</a>
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="video-tutorials.php">
			<i class="g-padding-r-5--xs ti-video-clapper g-font-size-16--md"></i> My Video Tutorials
			<span class="float-end">
				(<?php userVideosCount($usrId); ?>)
			</span>
		</a>
	</div>


		<div class="d-grid gap-2">
			<a href="logout.php" class="btn btn-sm btn-danger" type="button">Logout</a>
		</div>

</div>