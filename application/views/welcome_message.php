<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php $this->load->view('crud/partial/head') ?>
</head>
<body ng-app="loginPage">
	<div class="container" ng-controller="loginCtrl">
	    <div class="row">
	        <div class="col-sm-6 col-md-4 col-md-offset-4">
	            <h1 class="text-center login-title">Sign in</h1>
	            <div class="account-wall">
	                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
	                    alt="">
	                <form class="form-signin" ng-submit="onSubmit()">
		                <input type="text" class="form-control" placeholder="Email" required autofocus>
		                <input type="password" class="form-control" placeholder="Password" required>
		                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	                </form>
	            </div>
	            <a href="#" class="text-center new-account">Create an account </a>
	        </div>
	    </div>
	</div>
	<?php $this->load->view('crud/partial/foot') ?>
	<script>
		var app = angular.module('loginPage');
		app.controller('loginCtrl', function($scope, $http, $location){
			$scope.isLoading = false;
			$scope.user = {
				username: '',
				password: ''
			}
			$scope.onSubmit = function(){
    			$scope.isLoading = true;
    			var login = {
	    			method: 'POST',
	    			url: 'http://localhost:4545/ci_auth/auth/check_login',
	    			headers: {
	    				'Content-Type': 'application/x-www-form-urlencoded'
	    			},
	    			data: {
	    				'username': $scope.user.username,
	    				'password': $scope.user.password
	    			}
	    		};
	    		$http(login).then(function(res){
	    			$scope.isLoading = false;
	    			if(res.data.status === 'success'){
	    				console.log('login berhasil, selanjutnya terserah anda');
	    			}else{
	    				$mdToast.show(
      						$mdToast.simple()
					        .textContent(res.data.message)
					        .position('top')
					        .hideDelay(3000)
					    );
	    			}
	    		});
    		}
		})
	</script>

</body>
</html>