var app = angular.module('crudApp');

app.controller('crudCtrl', function($scope, $location, $http){

	$http.get('/api/user/getuser')
	.then(function(res){
		$scope.users = res.data.users;
	});

	$scope.addUser = function(){
		var add = {
			method: 'POST',
			url: '/api/user/createuser',
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded'
			},
			data: {
				'name': $scope.name_user,
				'address': $scope.address_user
			}
		}
		$http(add).then(function(res){
			$location.url('/table');
		})
	}

});