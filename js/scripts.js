var app = angular.module('interior', ['ngRoute']);
app.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider
        .when('/blog', {
			templateUrl: 'blog.html',
			controller: 'contentController'
		})
		.when('/about-us', {
			templateUrl: 'views/about-us.html'
		})
		.when('/', {
			templateUrl: 'views/home.html',
			})
		.otherwise({
			redirectTo: '/'
		});
  }]);