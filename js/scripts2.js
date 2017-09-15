var app = angular.module('docs', ['ngRoute']);

app.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider
        .when('/about-us', {
			templateUrl: 'views/about-us.html'
		})
		.when('/victimas', {
			templateUrl: 'views/victimas.html'
		})
		.when('/ddhh', {
			templateUrl: 'views/ddhh.html'
		})
        .when('/blog', {
			templateUrl: 'blog.html',
			controller: 'contentController'
		})
		.when('/cert', {
			templateUrl: 'views/certificado.html',
			controller: 'munController'
		})
		.when('/contact-us', {
			templateUrl: 'views/contact-us.html',
			controller: 'munController'
		})
		.when('/:reg', {
			templateUrl: 'views/jac.html',
			controller: 'munController'
		})
		.when('/sub/:mun', {
			templateUrl: 'views/jac.html',
			controller: 'munController'
		})
			.when('/sub/mun/:jac', {
			templateUrl: 'views/docs.html',
			controller: 'munController'
		})
		.when('/', {
			templateUrl: 'views/home.html',
			controller: 'contentController'
			})
	    .otherwise({
			redirectTo: '/'
		});
  }]);