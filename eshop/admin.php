<?php
	require_once ('config.php');
	if (isset($_SESSION['login']) && $_SESSION['login'] == 'on') {
		
	} else {
		header('Location: index.php');
	}
	$pageTitle = 'Админка';
?>

<?php
include('./template/__head.php');
?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<div class="header">
				<div class="row">
					<div class="col-md-10">
						<div class="site-logo">
							Админ панель
						</div>
					</div>
					<div class="col-md-2">
						<div class="admin-link">
							<!-- <i class="fas fa-unlock-alt"></i> -->
							<a href="../loqout.php">
								<img width="38" src="../img/icons/logout.svg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<div class="col-12">
					<div class="title-1">Добавить товар</div>

					<form action="add-new.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Название">
						</div>
						<div class="form-group">
							<select class="form-control" name="category">
								<option value="Телефоны">Телефоны</option>
								<option value="Планшеты">Планшеты</option>
								<option value="Ноутбуки">Ноутбуки</option>
								<option value="Компьютеры">Компьютеры</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Цена">
						</div>

						<div class="form-check form-check-inline">
							<input class="form-check-input" name="sale" type="checkbox" id="sale" value="1">
							<label class="form-check-label" for="sale">распродажа</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" name="new" type="checkbox" id="new" value="1">
							<label class="form-check-label" for="new">новинка</label>
						</div>

						<div class="form-group pt-3">
							<label for="img">Фото:</label>
							<input type="file" name="img" class="form-control-file" id="img">
						</div>

						<div class="form-group">
							<div class="form-group">
								<label for="description">Описание:</label>
								<textarea name="description" class="form-control" id="description" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Добавить</button>
						</div>
					</form>

				</div>

			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

<?php
	include('./template/__footer.php');
?>
