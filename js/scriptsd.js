var app = angular.module('interior', ['ngRoute']);
app.directive('directive', function() {
    return {
        restrict: 'A',
        link: function ($routeProvider) {
        $routeProvider
		.when('/about-us', {
			templateUrl: 'views/about-us.html'
		})
		.when('/', {
			templateUrl: 'views/home.html',
			})
		.otherwise({
			redirectTo: '/'
		});
  }
    };
}); 