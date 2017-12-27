<div ng-controller="crudCtrl">
	<h2><?= $title ?></h2>
	<form ng-submit="addUser()">
	  	<div class="form-group">
	    	<label for="email">Name:</label>
	    	<input type="text" class="form-control" name="name_user" ng-model="name_user">
	  	</div>
	  	<div class="form-group">
	    	<label for="pwd">Alamat:</label>
	    	<input type="text" class="form-control" name="address_user" ng-model="address_user">
	  	</div>
	  	<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>