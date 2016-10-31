<?php 
$app->get('/contenido/list', function() use ($app) {
    $response = array();
    $db = new DbHandler();
   
    $pages = $db->getAllRecords("select TITULO,INFORMACION,RUTA,Ubicacion,Fecha_actualizacion,Estado from Contenido where Estado='1' AND Ubicacion='1'");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['TITULO']= $page[0];	
			$pages_array['INFORMACION']= $page[1];	
			$pages_array['RUTA']= $page[2];	
			$pages_array['Ubicacion']= $page[3];	
			$pages_array['Fecha_actualizacion']= $page[4];	
			$pages_array['Estado']= $page[5];	
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});
$app->get('/contenido/listGal', function() use ($app) {
    $response = array();
    $db = new DbHandler();
   
    $pages = $db->getAllRecords("select TITULO,INFORMACION,RUTA,Ubicacion,Fecha_actualizacion,Estado from Contenido where Estado='1' AND Ubicacion='1'");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['TITULO']= $page[0];	
			$pages_array['INFORMACION']= $page[1];	
			$pages_array['RUTA']= $page[2];	
			$pages_array['Ubicacion']= $page[3];	
			$pages_array['Fecha_actualizacion']= $page[4];	
			$pages_array['Estado']= $page[5];	
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});
$app->get('/contenido/listCarr', function() use ($app) {
    $response = array();
    $db = new DbHandler();
   
    $pages = $db->getAllRecords("select TITULO,INFORMACION,RUTA,Ubicacion,Fecha_actualizacion,Estado from Contenido where Estado='1' AND Ubicacion='3'");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['TITULO']= $page[0];	
			$pages_array['INFORMACION']= $page[1];	
			$pages_array['RUTA']= $page[2];	
			$pages_array['Ubicacion']= $page[3];	
			$pages_array['Fecha_actualizacion']= $page[4];	
			$pages_array['Estado']= $page[5];	
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});

?>