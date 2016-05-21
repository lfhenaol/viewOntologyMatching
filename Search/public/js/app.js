
var app = angular.module("collectInputData",['ngRoute','ngAnimate']);

app.config(function ($routeProvider) {
    $routeProvider.when('/data', {
        templateUrl: 'data'
    })
        .when('/matching', {
            templateUrl: '/matching'
        }).when('/baseConocimiento', {
            templateUrl: '/BaseConocimiento'
        })
        .otherwise({
            redirectTo: '/data'
        });
});