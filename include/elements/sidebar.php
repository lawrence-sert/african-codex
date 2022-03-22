<div class="border-end bg-white" id="sidebar-wrapper">
	<div class="sidebar-heading border-bottom bg-light">africancodex</div>


	<div class="profile mt-4">
		<div class="text-center">
			<img class="profile-user-img img-fluid img-circle"
			src="assets/images/profile/lawrence.jpg"
			alt="User profile picture">
		</div>

		<?php 
			$email = $rsuser['email']; 
			$countryId = $rsuser['country'];
			$phone = $rsuser['phone'];
			$website = $rsuser['website'];
		?>

		<h3 class="profile-username text-center"><?php echo $rsuser['username']; ?></h3>

		<p class="text-muted text-center g-font-size-14--md code-font">
			

			
			<?php 
			if(empty($email)) {

			}
			else {
				echo "<i class='g-padding-r-5--xs ti-email g-font-size-14--md'></i>";
				echo $email;
				echo "<br>";
			}

			if(empty($phone)){

			}
			else {
				echo "<i class='g-padding-r-5--xs ti-mobile g-font-size-14--md'></i>";
				echo "(+";
				countryPhonecode($countryId);
				echo ")";
				echo $phone;
				echo "<br>";
			}

				if(empty($countryId)) {
				
				}
				else {
					echo "<i class='g-padding-r-5--xs ti-location-pin g-font-size-14--md'></i>";
					countryName($countryId);
					echo "<br>";
				}

				if(empty($website)) {
				
				}
				else {
					echo "<i class='g-padding-r-5--xs ti-world g-font-size-14--md'></i>";
					echo $website;
					echo "<br>";
				}
			?>
			<button type="button" class="mt-2 mb-3 btn btn-success btn-sm g-hor-centered-row__col">Sync Resources</button>

			<!-- <br>
			<a href="#" data-bs-toggle="modal" data-bs-target="#userModal"><i class="g-padding-r-5--xs ti-settings g-font-size-14--md"></i> Settings</a> -->
		</p>

		
	</div>

	<div class="list-group list-group-flush">
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="dashboard.php">
			<i class="g-padding-r-5--xs ti-desktop g-font-size-16--md"></i> Dashboard
		</a>
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="pages.php">
			<i class="g-padding-r-5--xs ti-layers g-font-size-16--md"></i> Pages
			<span class="float-end">
				(<?php userPageCount($usr_code); ?>)
			</span>
		</a>
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="notes.php">
			<i class="g-padding-r-5--xs ti-notepad g-font-size-16--md"></i> Notes
			<span class="float-end">
				(<?php userNotesCount($usr_code); ?>)
			</span>
		</a>
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="tools.php">
			<i class="g-padding-r-5--xs ti-zip g-font-size-16--md"></i> Tools
			<span class="float-end">
				(<?php userToolsCount($usr_code); ?>)
			</span>
		</a>
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="my-resources.php">
			<i class="g-padding-r-5--xs ti-archive g-font-size-16--md"></i> My Resources
			<span class="float-end">
				(<?php userResourcesCount($usr_code); ?>)
			</span>
		</a>
		<a class="list-group-item list-group-item-action list-group-item-light p-3" href="video-tutorials.php">
			<i class="g-padding-r-5--xs ti-video-clapper g-font-size-16--md"></i> My Video Tutorials
			<span class="float-end">
				(<?php userVideosCount($usr_code); ?>)
			</span>
		</a>
	</div>


		<div class="d-grid gap-2">
			<a href="logout.php" class="btn btn-sm btn-danger" type="button">Logout</a>
		</div>

		<?php require_once'include/snippets/user_modal.php'; ?>

</div>