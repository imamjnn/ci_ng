var app = angular.module('crudApp');

app.controller('crudCtrl', function($scope, $http){
	$http.get('http://localhost:4545/ci_ng/api/user/getuser')
	.then(function(res){
		$scope.users = res.data.users;
	})
})