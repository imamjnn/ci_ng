<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<?php $this->load->view('crud/partial/head') ?>
</head>
<body ng-app="crudApp">
	<nav class="navbar navbar-default">
  		<div class="container-fluid">
    		<div class="navbar-header">
	      		<a class="navbar-brand" href="#">CRUD</a>
	    	</div>
	    	<ul class="nav navbar-nav">
	      		<li><a href="#!crud">Home</a></li>
	      		<li><a href="#!table">Data</a></li>
	      		<li><a href="#!add">Add</a></li>
	    	</ul>
  		</div>
	</nav>
	<div class="container">
  		<div ng-view></div>
	</div>
	<?php $this->load->view('crud/partial/foot') ?>
</body>
</html>