var app = angular.module('crudApp', ['ngRoute']);

app.config(function($routeProvider) {
    $routeProvider
    .when("/crud", {
        templateUrl : "/crud"
    })
    .when("/add", {
        templateUrl : "/ci_ng/crud/add"
    });
});