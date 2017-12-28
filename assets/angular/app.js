var app = angular.module('crudApp', ['ngRoute']);

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "/crud/table",
        controller : "crudCtrl"
    })
    .when("/add", {
        templateUrl : "/crud/add",
        controller : "crudCtrl"
    })
    .when("/edit/:id", {
        templateUrl : function(stateParams){
        	return "/crud/add/"+stateParams.id;
        },
        controller : "crudCtrl"
    });
});