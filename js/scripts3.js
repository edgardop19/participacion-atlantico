var app = angular.module('admin', ['ngRoute','datatables']);


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
                	
                	scope.listsJac();
                  scope.listsDoc();
                  $('#docstable').DataTable();
                  scope.listsCont();
                  $('#contstable').DataTable();
                  
                  
                   $('#juntastable').DataTable();
                  
                   
               }
            };
         }]);


app.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider
		.when('/docs', {
			templateUrl: 'views/newd.php',
			controller: 'munController'
		})
		.when('/jac', {
			templateUrl: 'views/munj.html',
			controller: 'munController'
		})
		.when('/jac/:mun', {
			templateUrl: 'views/newj.php',
			controller: 'munController'
		})
		.when('/actd/:doc', {
			templateUrl: 'views/actd.html',
			controller: 'munController'
		})
			.when('/actj/:cod', {
			templateUrl: 'views/actj.html',
			controller: 'munController'
		})
			.when('/actc/:ID', {
			templateUrl: 'views/actc.html',
			controller: 'munController'
		})	
			.when('/cont', {
			templateUrl: 'views/newc.php',
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