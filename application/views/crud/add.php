<div ng-controller="editCtrl">
	<h2><?= $title ?></h2>
	<form name="form" ng-submit="<?= $id ? 'updateUser(user.id)' : 'addUser()' ?>">
	  	<div class="form-group" ng-class="{'has-error':form.name.$invalid && !form.name.$pristine}">
	    	<label for="name">Name:</label>
	    	<input type="text" class="form-control" name="name" ng-model="user.name" required>
	  	</div>
	  	<div class="form-group" ng-class="{'has-error':form.username.$invalid && !form.username.$pristine}">
	    	<label for="username">Username:</label>
	    	<input type="text" class="form-control" name="username" ng-model="user.username" ng-minlength="3" ng-maxlength="8" required>
	    	<p ng-show="form.username.$error.minlength" class="help-block">Username is too short.</p>
            <p ng-show="form.username.$error.maxlength" class="help-block">Username is too long.</p>
	  	</div>
	  	<div class="form-group" ng-class="{'has-error':form.email.$invalid && !form.email.$pristine}">
	    	<label for="email">Email:</label>
	    	<input type="email" class="form-control" name="email" ng-model="user.email" required>
	    	<p ng-show="form.email.$invalid && !form.email.$pristine" class="help-block">Enter a valid email.</p>
	  	</div>
	  	<div class="form-group">
	    	<label for="address">Alamat:</label>
	    	<input type="text" class="form-control" name="address" ng-model="user.address" required>
	  	</div>
	  	
	  	<button type="submit" class="btn btn-primary pull-right" ng-disabled="form.$invalid">Save</button>
	  	<a href="#!/" class="btn btn-default">Cancel</a>
	</form>
</div>