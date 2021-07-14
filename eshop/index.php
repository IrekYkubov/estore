<?php
	require_once ('config.php');
	if (isset ($_GET['category']) ) {
		$pageTitle = $_GET['category'];
	} else{
		$pageTitle = 'Главная страница';
	}
?>
<?php
	include ('./template/__head.php');
?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">

			<?php
				include ('./template/__header.php');
			?>
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">

				<!-- sidebar -->
				<?php
					include ('./template/__aside.php');
				?>

				<!-- Center Part -->
				<div class="col-md-9 col-lg-10">
					<div class="row">

					<?php
						$item = new Product();
						$item->getItem();
					?>		
					</div>
				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->
<?php 
	include ('./template/__footer.php');
?>
