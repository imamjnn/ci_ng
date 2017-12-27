var app = angular.module('crudApp', ['ngRoute']);

app.config(function($routeProvider) {
    $routeProvider
    .when("/table", {
        templateUrl : "/crud/table",
        controller : "crudCtrl"
    })
    .when("/add", {
        templateUrl : "/crud/add"
    });
});