app.controller('munController', function ($scope, $rootScope, $routeParams, $location, $http,$window) {
	
	$scope.listsMun = function () {
		var reg = $routeParams.reg;
	    var page = {"reg":reg}; 
		$http.post('api/juntas/list', {page,page})
		.then(function (results) {
				$scope.municipios=results.data;			
		});
	};
		$scope.listsMun2 = function () {
		$http.post('api/juntas/listmun')
		.then(function (results) {
				$scope.muns=results.data;			
		});
	};
	$scope.listsJac = function () {
		var mun = $routeParams.mun;
	    var page = {"mun":mun}; 
		$http.post('api/juntas/showmun', {page,page})
		.then(function (results) {
				$scope.juntas=results.data;			
		});
	};
	$scope.listsJac3 = function (page) {
		$http.post('api/juntas/show', {page,page})
		.then(function (results) {
				$scope.juntas=results.data;			
		});
	};
	$scope.listsup = function () {
		var doc = $routeParams.doc;
	    var page = {"doc":doc}; 
		$http.post('api/juntas/update', {page,page})
		.then(function (results) {
				$scope.dato=results.data[0];
		});
	};
	
		$scope.listsupj = function () {
		var cod = $routeParams.cod;
	    var page = {"cod":cod}; 
		$http.post('api/juntas/updatej', {page,page})
		.then(function (results) {
				$scope.dato=results.data[0];
			
		});
	};
		$scope.listsJac2 = function () {
		$http.post('api/juntas/show2')
		.then(function (results) {
				$scope.juntas=results.data;			
		});
	};
	$scope.listsDoc = function () {
		$http.post('api/juntas/showDoc')
		.then(function (results) {
				$scope.docs=results.data;			
		});
	};
	$scope.listsDoc2 = function () {
		var jac = $routeParams.jac;
	    var page = {"jac":jac}; 
		$http.post('api/juntas/Docs', {page,page})
		.then(function (results) {
				$scope.docs=results.data;			
		});
	};
	 	$scope.respuesta=null;
    $scope.generate = {};
	$scope.deleteDoc = function (obj) {
		$http.post('api/juntas/delete', {obj,obj})
		 .success(function(){
          alert("Documento eliminado exitosamente !");	
        })
        .error(function(){
          alert("No se ha podido eliminar el documento, intente de nuevo");	 
        });
	};
		$scope.respuesta=null;
		$scope.generate = {};
	$scope.deleteCont = function (obj) {
		$http.post('api/juntas/deleteCont', {obj,obj})
		 .success(function(){
          alert("Contenido eliminado exitosamente !");	
        })
        .error(function(){
          alert("No se ha podido eliminar el contenido, intente de nuevo");	 
        });
	};
		$scope.respuesta=null;
	$scope.deleteJac = function (obj) {
		$http.post('api/juntas/deleteJac', {obj,obj})
		 .success(function(){
          alert("Junta eliminada exitosamente !");	
        })
        .error(function(){
          alert("No se ha podido eliminar la junta, intente de nuevo");	 
        });
	};
	
	$scope.listsCont = function () {
		$http.post('api/juntas/showConts')
		.then(function (results) {
				$scope.conts=results.data;			
		});
	};
	$scope.respuesta=null;
    $scope.generate = {};
    $scope.generate = function (page) {
        $http.post('api/juntas/generate', {page,page}
        )
        .then(function (results) {
		     	if (results.data.status == "No existe") {
           alert("Dignatario no encontrado en nuestros registros");
         }
         else{
            alert("Certificado generado exitosamente !");
            $window.open('https://participacion-atlantico-edgardop19.c9users.io/docs/filename.pdf', '_blank');
         }	
	    	});
         
    };
    $scope.upload = function(page){
    	
    /*	console.log(page.titulo);
        console.log('file is ' );
        console.dir(page.archivo); */
        var fd = new FormData();
        
        fd.append('titulo', page.titulo);
        fd.append('palabras', page.palabras);
        fd.append('juntaId', page.juntaId.cod);
        fd.append('archivo', page.archivo);
        $http.post('api/juntas/upload', fd, {
              transformRequest: angular.identity,
              headers: {'Content-Type': undefined}
        })
        .success(function(){
          alert("Documento cargado exitosamente !");	
        })
        .error(function(){
          alert("No se ha podido cargar el documento, intente de nuevo");	 
        });
        
    }
     $scope.upload2 = function(page){
        var fd = new FormData();
        
        fd.append('titulo', page.titulo);
        fd.append('descripcion', page.descripcion);
        fd.append('ubicacion', page.ubicacion);
        fd.append('estado', page.estado);
        fd.append('archivo', page.archivo);
        $http.post('api/juntas/upload2', fd, {
              transformRequest: angular.identity,
              headers: {'Content-Type': undefined}
        })	
        .success(function(){
        	 alert("Documento cargado exitosamente !");
        })
        .error(function(){
        	 alert("No se ha podido cargar el documento, intente de nuevo");
        });
    }
    $scope.updatej = function(page){
    	
    	var fd = new FormData();
        
        fd.append('cod', page.cod);
        fd.append('idMunicipio', page.idMunicipio);
        fd.append('jurisdiccion', page.jurisdiccion);
        fd.append('resolucion', page.resolucion);
        fd.append('nombre', page.nombre);
        fd.append('cc', page.cc);
     $http.post('api/juntas/updatejac', fd, {
              transformRequest: angular.identity,
              headers: {'Content-Type': undefined}
        })	
        .success(function(){
        	 alert("Junta actualizada exitosamente !");
        })
        .error(function(){
        	 alert("No se ha podido actualizar, intente de nuevo");
        });
        
    };
    	$scope.respuesta=null;
    $scope.addRecurso = {};
    $scope.addDoc = function (page) {
        $http.post('api/juntas/add', {page,page}
        ).then(function (results) {
            if (results.data.status == "success") {
                $scope.respuesta="Los datos fueron agregados con éxito."
            }else{
			    $scope.respuesta="Ocurrio un error con su solicitud."
			}
        });
        
    };
    	$scope.respuesta=null;
    $scope.addRecurso = {};
    $scope.createj = function (page) {
        $http.post('api/juntas/create', {page,page}
        ).then(function (results) {
            if (results.data.status == "success") {
                $scope.respuesta="Los datos fueron agregados con éxito."
                alert("Junta creada exitosamente");
            }else{
			    $scope.respuesta="Ocurrio un error con su solicitud."
			}
        });
        
    };

});