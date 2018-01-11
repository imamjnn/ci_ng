var app = angular.module('crudApp');

app.controller('editCtrl', function($scope, $http, $routeParams, $location){
	
	if($routeParams.id){
		var id = $routeParams.id;
		$http.get('/api/user/getuser/'+id)
		.then(function(res){
			console.log(res);
			$scope.user = res.data.user;
		});
	};

	$scope.addUser = function(){
		var add = {
			method: 'POST',
			url: '/api/user/createuser',
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded'
			},
			data: {
				'name': $scope.user.name,
				'username': $scope.user.username,
				'email': $scope.user.email,
				'address': $scope.user.address
			}
		}
		$http(add).then(function(res){
			$location.url('/');
		})
	};

	$scope.updateUser = function(id){
		var add = {
			method: 'PUT',
			url: '/api/user/updateuser/'+id,
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded'
			},
			data: {
				'name': $scope.user.name,
				'username': $scope.user.username,
				'email': $scope.user.email,
				'address': $scope.user.address
			}
		}
		$http(add).then(function(res){
			$location.url('/');
		})
	};
	
});
	

app.controller('crudCtrl', function($scope, $location, $http, $routeParams){

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

	$scope.delUser = function(id){
		var del = {
			method: 'DELETE',
			url: '/api/user/deleteuser/'+id
		}
		var c = confirm('Are you sure?');
		if(c == true){
			$http(del).then(function(res){
				$scope.refresh();
			})
		}
		
	}

});