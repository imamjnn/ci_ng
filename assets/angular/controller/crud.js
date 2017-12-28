var app = angular.module('crudApp');

app.controller('crudCtrl', function($scope, $location, $http){

	$http.get('/api/user/getuser')
	.then(function(res){
		$scope.users = res.data.users;
	});

	$scope.refresh = function(){
		$http.get('/api/user/getuser')
		.then(function(res){
			$scope.users = res.data.users;
		})
	};

	$scope.addUser = function(){
		var add = {
			method: 'POST',
			url: '/api/user/createuser',
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded'
			},
			data: {
				'name': $scope.name_user,
				'username': $scope.username_user,
				'email': $scope.email_user,
				'address': $scope.address_user
			}
		}
		$http(add).then(function(res){
			$location.url('/');
		})
	};

	$scope.delUser = function(id){
		var del = {
			method: 'DELETE',
			url: '/api/user/deleteuser/'+id
		}
		var c = confirm('Are you sure?');
		if(c == true){
			$http(del).then(function(res){
				console.log(res);
				$scope.refresh();
			})
		}
		
	}

});