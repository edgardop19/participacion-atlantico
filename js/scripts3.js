var app = angular.module('admin', ['ngRoute']);


 app.directive('fileModel', ['$parse', function ($parse) {
            return {
               restrict: 'A',
               link: function(scope, element, attrs) {
                  var model = $parse(attrs.fileModel);
                  var modelSetter = model.assign;
                  
                  element.bind('change', function(){
                     scope.$apply(function(){
                        modelSetter(scope, element[0].files[0]);
                     });
                  });
               }
            };
         }]);

app.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider
		.when('/docs', {
			templateUrl: 'views/newd.html',
			controller: 'munController'
		})
		.when('/actd/:doc', {
			templateUrl: 'views/actd.html',
			controller: 'munController'
		})
			.when('/cont', {
			templateUrl: 'views/newc.html',
			controller: 'munController'
		})
		.when('/sub/:id', {
			templateUrl: 'views/jac.html',
			controller: 'munController'
		})
	    .otherwise({
			redirectTo: '/'
		});
  }]);