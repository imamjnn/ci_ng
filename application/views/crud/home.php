<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<?php $this->load->view('crud/partial/head') ?>
</head>
<body ng-app="crudApp">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div ng-view></div>
			</div>
		</div>
	</div>
	<?php $this->load->view('crud/partial/foot') ?>
</body>
</html>