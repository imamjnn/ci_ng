<div ng-controller="crudCtrl">
	<h2><?= $title ?></h2>
	<form name="form" ng-submit="addUser()">
	  	<div class="form-group" ng-class="{'has-error':form.name_user.$invalid && !form.name_user.$pristine}">
	    	<label for="name">Name:</label>
	    	<input type="text" class="form-control" name="name_user" ng-model="name_user" required>
	  	</div>
	  	<div class="form-group" ng-class="{'has-error':form.username_user.$invalid && !form.username_user.$pristine}">
	    	<label for="username">Username:</label>
	    	<input type="text" class="form-control" name="username_user" ng-model="username_user" ng-minlength="3" ng-maxlength="8" required>
	    	<p ng-show="form.username_user.$error.minlength" class="help-block">Username is too short.</p>
            <p ng-show="form.username_user.$error.maxlength" class="help-block">Username is too long.</p>
	  	</div>
	  	<div class="form-group" ng-class="{'has-error':form.email_user.$invalid && !form.email_user.$pristine}">
	    	<label for="email">Email:</label>
	    	<input type="email" class="form-control" name="email_user" ng-model="email_user" required>
	    	<p ng-show="form.email_user.$invalid && !form.email_user.$pristine" class="help-block">Enter a valid email.</p>
	  	</div>
	  	<div class="form-group">
	    	<label for="address">Alamat:</label>
	    	<input type="text" class="form-control" name="address_user" ng-model="address_user" required>
	  	</div>
	  	
	  	<button type="submit" class="btn btn-primary pull-right" ng-disabled="form.$invalid">Save</button>
	  	<a href="#!/" class="btn btn-default">Cancel</a>
	</form>
</div>