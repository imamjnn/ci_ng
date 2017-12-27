var app = angular.module('crudApp', ['ngRoute']);

app.config(function($routeProvider) {
    $routeProvider
    .when("/table", {
        templateUrl : "/ci_ng/crud/table"
    })
    .when("/add", {
        templateUrl : "/ci_ng/crud/add"
    });
});