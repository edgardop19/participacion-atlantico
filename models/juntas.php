<?php 
    header('Content-Type: text/html; charset=ISO-8859-1');
$app->post('/juntas/list', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
    $subreg = $r->page->reg;
   
    $pages = $db->getAllRecords("select ID,Nombre,subregion from Municipios where subregion='$subreg' order by Nombre");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['ID']= $page[0];	
			$pages_array['Nombre']= $page[1];	
			$pages_array['subregion']= $page[2];	
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});
$app->post('/juntas/listmun', function() use ($app) {
    $response = array();
    $db = new DbHandler();
   
    $pages = $db->getAllRecords("select ID,Nombre from Municipios order by Nombre");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['ID']= $page[0];	
			$pages_array['Nombre']= $page[1];	
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});

$app->post('/juntas/getmun', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
    
    $id = $r->page->ID;
    $pages = $db->getAllRecords("select ID,Nombre from Municipios where ID ='$id'");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['ID']= $page[0];	
			$pages_array['Nombre']= $page[1];	
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});

$app->post('/juntas/show', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
    $mun = $r->page;
   
    $pages = $db->getAllRecords("select cod,idMunicipio,jurisdiccion from JAC where idMunicipio='$mun' order by jurisdiccion");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['cod']= $page[0];	
			$pages_array['idMunicipio']= $page[1];	
			$pages_array['jurisdiccion']= $page[2];	
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});
$app->post('/juntas/showmun', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
    $mun = $r->page->mun;
   
    $pages = $db->getAllRecords("select cod,idMunicipio,jurisdiccion,resolucion,cc,nombre from JAC where idMunicipio='$mun' order by jurisdiccion");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['cod']= $page[0];	
			$pages_array['idMunicipio']= $page[1];	
			$pages_array['jurisdiccion']= $page[2];	
			$pages_array['resolucion']= $page[3];	
			$pages_array['cc']= $page[4];	
			$pages_array['nombre']= $page[5];	
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});
$app->post('/juntas/update', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
    $id = $r->page->doc;
   
    $pages = $db->getAllRecords("select DESCRIPCION,PALABRAS_CLAVES,CODJUNTA,ID from Documento where ID='$id'");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
				$pages_array['DESCRIPCION']= $page[0];	
			$pages_array['PALABRAS_CLAVES']= $page[1];	
			$pages_array['CODJUNTA']= $page[2];	
			$pages_array['RUTA']= $page[3];	
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});
$app->post('/juntas/updatej', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
    $id = $r->page->cod;
   
    $pages = $db->getAllRecords("select idMunicipio,jurisdiccion,resolucion,j.nombre,cc,m.Nombre,cod from JAC j,Municipios m where cod='$id' AND idMunicipio=m.ID");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['idMunicipio']= $page[0];	
			$pages_array['jurisdiccion']= $page[1];	
			$pages_array['resolucion']= $page[2];	
			$pages_array['nombre']= $page[3];
			$pages_array['cc']= $page[4];
			$pages_array['mun']= $page[5];
			$pages_array['cod']= $page[6];
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});

$app->post('/juntas/updatec', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
    $id = $r->page->ID;
   
    $pages = $db->getAllRecords("select ID,TITULO,INFORMACION,RUTA,UBICACION,ESTADO from Contenido where ID='$id'");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['ID']= $page[0];	
			$pages_array['TITULO']= $page[1];	
			$pages_array['INFORMACION']= $page[2];	
			$pages_array['RUTA']= $page[3];
			$pages_array['UBICACION']= $page[4];
			$pages_array['ESTADO']= $page[5];
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});

$app->post('/juntas/show2', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
    $pages = $db->getAllRecords("select cod,idMunicipio,jurisdiccion from JAC order by jurisdiccion");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['cod']= $page[0];	
			$pages_array['idMunicipio']= $page[1];	
			$pages_array['jurisdiccion']= $page[2];	
			$response[] =$pages_array;
		}		
    }
    echoResponse(200, $response);
}); 
$app->post('/juntas/showDoc', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
   
    $pages = $db->getAllRecords("SELECT DESCRIPCION, PALABRAS_CLAVES, CODJUNTA, d.ID, RUTA, m.Nombre, jurisdiccion FROM Documento d, JAC, Municipios m WHERE CODJUNTA = cod AND idMunicipio = m.ID ORDER BY CODJUNTA");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['DESCRIPCION']= $page[0];	
			$pages_array['PALABRAS_CLAVES']= $page[1];	
			$pages_array['CODJUNTA']= $page[2];
			$pages_array['ID']= $page[3];
			$pages_array['RUTA']= $page[4];
			$pages_array['Nombre']= $page[5];
			$pages_array['jurisdiccion']= $page[6];
			$response[] =$pages_array;
		}		
    }
     
    
    
	echoResponse(200, $response);
});
$app->post('/juntas/showConts', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
    $pages = $db->getAllRecords("select ID,TITULO,INFORMACION,RUTA,Ubicacion,Fecha_actualizacion,Estado from Contenido order by Ubicacion");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['ID']= $page[0];	
			$pages_array['TITULO']= $page[1];	
			$pages_array['INFORMACION']= $page[2];
			$pages_array['RUTA']= $page[3];
			$pages_array['Ubicacion']= $page[4];	
			$pages_array['Fecha_actualizacion']= $page[5];	
			$pages_array['Estado']= $page[6];
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});
$app->post('/juntas/Docs', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
    $jac = $r->page->jac;
    $pages = $db->getAllRecords("select DESCRIPCION,PALABRAS_CLAVES,CODJUNTA,RUTA from Documento where CODJUNTA='$jac' order by DESCRIPCION");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['DESCRIPCION']= $page[0];	
			$pages_array['PALABRAS_CLAVES']= $page[1];	
			$pages_array['CODJUNTA']= $page[2];	
			$pages_array['RUTA']= $page[3];	
			$response[] =$pages_array;
		}		
    }
	echoResponse(200, $response);
});


$app->post('/juntas/upload', function() use ($app) {
    $response = array();
    $db = new DbHandler();
        $hoy=getdate(); 
   $storage = new \Upload\Storage\FileSystem('../docs');
   $file = new \Upload\File('archivo', $storage);
   
    $page2Insert= array();
		$page2Insert['TIPO']="1";
		$page2Insert['DESCRIPCION']=$_POST['titulo'];
			$page2Insert['FECHA']=$hoy['mday']."/".$hoy['mon']."/".$hoy['year'];
		$page2Insert['PALABRAS_CLAVES']=$_POST['palabras'];
		$page2Insert['CODJUNTA']=$_POST['juntaId'];
		$page2Insert['RUTA']="/docs/" . $file->getNameWithExtension();
	
	
        $column_names = array('TIPO','DESCRIPCION', 'FECHA', 'PALABRAS_CLAVES','CODJUNTA','RUTA');
		
        $tabble_name = "Documento";
        $result = $db->insertIntoTable($page2Insert, $column_names, $tabble_name);
   
   try { 
        $file->upload();
        $response["status"]="OK";
    } catch (\Exception $e) { 
        $errors = $file->getErrors();
        $response["status"]=$errors;
    }
    echoResponse(200, $response);
   
});
$app->post('/juntas/upload2', function() use ($app) {
    $response = array();
    $db = new DbHandler();
        $hoy=getdate();
   $storage = new \Upload\Storage\FileSystem('../imgs');
   $file = new \Upload\File('archivo', $storage);
   
    $page2Insert= array();
		$page2Insert['TITULO']=$_POST['titulo'];
		$page2Insert['INFORMACION']=$_POST['descripcion'];
		$page2Insert['RUTA']="/imgs/" . $file->getNameWithExtension();
		$page2Insert['Ubicacion']=$_POST['ubicacion'];
			$page2Insert['Fecha_creacion']=$hoy['mday']."/".$hoy['mon']."/".$hoy['year'];
			$page2Insert['Fecha_actualizacion']=$hoy['mday']."/".$hoy['mon']."/".$hoy['year'];
		$page2Insert['Estado']=$_POST['estado'];
		

        $column_names = array('TITULO','INFORMACION', 'RUTA', 'Ubicacion','Fecha_creacion','Fecha_actualizacion','Estado');
		
        $tabble_name = "Contenido";
        $result = $db->insertIntoTable($page2Insert, $column_names, $tabble_name);
   try { 
        $file->upload();
        $response["status"]="OK";
    } catch (\Exception $e) { 
        $errors = $file->getErrors();
        $response["status"]=$errors;
    }
    echoResponse(200, $response);
   
});
$app->post('/juntas/updatejac', function() use ($app) {
     
    $response = array();
    $db = new DbHandler();
    
    
    $id = $_POST['cod'];
		   $pages2upload = array();
		   $pages2upload['cod']= $_POST['cod'];
		    $pages2upload['idMunicipio']= $_POST['idMunicipio'];	
			$pages2upload['jurisdiccion']= $_POST['jurisdiccion'];	
			$pages2upload['resolucion']= $_POST['resolucion'];	
			$pages2upload['nombre']= $_POST['nombre'];
			$pages2upload['cc']= $_POST['cc'];
			echo($pages2upload);
	
     $column_names = array('cod','idMunicipio', 'jurisdiccion','resolucion','nombre','cc');
		
        $tabble_name = "JAC";
       $where="cod='$id'"; 
       $result = $db->updateOneRecord($pages2upload, $column_names, $tabble_name,$where);
       
      // $pages = $db->deleteOneRecord("delete from JAC where cod='$id'");
       
		$response["status"]="OK";
    echoResponse(200, $response);
   
});

$app->post('/juntas/updatecont', function() use ($app) {
     
    $response = array();
    $db = new DbHandler();
     $hoy=getdate();
    $id = $_POST['ID'];
    
    $pages = $db->getAllRecords("select RUTA from Contenido where ID='$id'");
    if ($pages != NULL) {
		foreach($pages as $page){
			$ruta= $page[0];	
		}		
    }
		   $pages2upload = array();
		   $pages2upload['ID']= $_POST['ID'];
		    $pages2upload['TITULO']= $_POST['TITULO'];	
			$pages2upload['INFORMACION']= $_POST['INFORMACION'];	
			$pages2upload['Fecha_actualizacion']=$hoy['mday']."/".$hoy['mon']."/".$hoy['year'];
			     
			    $storage = new \Upload\Storage\FileSystem('../imgs');
			try{ 
                $file = new \Upload\File('archivo', $storage);
                unlink('../'.$ruta);
			    $pages2upload['RUTA']="/imgs/" . $file->getNameWithExtension();
			}catch(\Exception $e){}
		
			$pages2upload['UBICACION']= $_POST['UBICACION'];
			$pages2upload['ESTADO']= $_POST['ESTADO'];
			echo($pages2upload);
	
     $column_names = array('ID','TITULO', 'INFORMACION','RUTA','UBICACION','ESTADO');
		
        $tabble_name = "Contenido";
       $where="ID='$id'"; 
       $result = $db->updateOneRecord($pages2upload, $column_names, $tabble_name,$where);
       
      // $pages = $db->deleteOneRecord("delete from JAC where cod='$id'");
      
        try { 
            $file->upload();
            $response["status"]="OK";
        } catch (\Exception $e) { 
            //$errors = $file->getErrors();
            //$response["status"]=$errors;
        }
      
           
		$response["status"]="OK";
    echoResponse(200, $response);
   
});

$app->post('/juntas/add', function() use ($app) {
    $response = array();
     $hoy=getdate();
    $r = json_decode($app->request->getBody());
    $db = new DbHandler();
        
		$page2Insert= array();
		$page2Insert['TIPO']="1";
		$page2Insert['DESCRIPCION']=$r->page->titulo;
			$page2Insert['FECHA']=$hoy['mday']."/".$hoy['mon']."/".$hoy['year'];
		$page2Insert['PALABRAS_CLAVES']=$r->page->palabras;
		$page2Insert['CODJUNTA']=$r->page->juntaId;
	
	
        $column_names = array('TIPO','DESCRIPCION', 'FECHA', 'PALABRAS_CLAVES','CODJUNTA');
		
        $tabble_name = "Documento";
        $result = $db->insertIntoTable($page2Insert, $column_names, $tabble_name);
        if ($result != NULL) {
            $response["status"] = "success";
            $response["message"] = "Page created successfully";            
            echoResponse(200, $response);
        } else {
            $response["status"] = "error";
            $response["message"] = "Failed to create page. Please try again";
            echoResponse(201, $response);
        }            
   
});
$app->post('/juntas/create', function() use ($app) {
    $response = array();
    $r = json_decode($app->request->getBody());
    $db = new DbHandler();
        
		$page2Insert= array();
		$page2Insert['idMunicipio']=$r->page->mun;
		$page2Insert['jurisdiccion']=$r->page->jurisdiccion;
			$page2Insert['resolucion']=$r->page->resolucion;
		$page2Insert['nombre']=$r->page->nombre;
		$page2Insert['cc']=$r->page->cedula;
	
	
        $column_names = array('idMunicipio','jurisdiccion', 'resolucion', 'nombre','cc');
		
        $tabble_name = "JAC";
        $result = $db->insertIntoTable($page2Insert, $column_names, $tabble_name);
        if ($result != NULL) {
            $response["status"] = "success";
            $response["message"] = "Page created successfully";            
            echoResponse(200, $response);
        } else {
            $response["status"] = "error";
            $response["message"] = "Failed to create page. Please try again";
            echoResponse(201, $response);
        }            
   
});
$app->post('/juntas/delete', function() use ($app) {
    $response = array();
     $r = json_decode($app->request->getBody());
    $db = new DbHandler();
    $id = $r->obj->ID;
    
    $pages = $db->getAllRecords("select RUTA from Documento where ID='$id'");
    if ($pages != NULL) {
		foreach($pages as $page){
			$ruta= $page[0];	
		}		
    }
    $pages = $db->deleteOneRecord("delete from Documento where ID='$id'");
    unlink('../'.$ruta);
     $response["status"]="OK";
});
$app->post('/juntas/deleteJac', function() use ($app) {
    $response = array();
     $r = json_decode($app->request->getBody());
    $db = new DbHandler();
    $id = $r->obj->cod;
    
    $pages = $db->deleteOneRecord("delete from JAC where cod='$id'");
     $response["status"]="OK";
});
$app->post('/juntas/deleteCont', function() use ($app) {
    $response = array();
     $r = json_decode($app->request->getBody());
    $db = new DbHandler();
    $id = $r->obj->ID;
    
    $pages = $db->getAllRecords("select RUTA from Contenido where ID='$id'");
    if ($pages != NULL) {
		foreach($pages as $page){
			$ruta= $page[0];	
		}		
    }
    $pages = $db->deleteOneRecord("delete from Contenido where ID='$id'");
    unlink('../'.$ruta);
     $response["status"]="OK";
});
$app->post('/juntas/generate', function() use ($app) {
   
    $response = array();
    $r = json_decode($app->request->getBody());
    $db = new DbHandler();
    $ced = $r->page->cedula;
    
    $pages = $db->getAllRecords("select idMunicipio,jurisdiccion,j.nombre,cc,m.Nombre from JAC j, Municipios m where cc='$ced' AND (j.idMunicipio=m.ID)");
    $aux=$pages;
    if ($pages != NULL) {
		foreach($pages as $page){
			$junta= $page[1];
			$nombre= $page[2];
			$mun= $page[4];
		}		
    }
    
    if ($aux != NULL) {
   	require('../fpdf.php');
   	$hoy=getdate();
   	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image('../images/logo.png',10,8,40);
    $pdf->SetFont('Arial','',12);
    $pdf->Ln(40);
    $pdf->Cell(15);
    $pdf->Cell(80,10,utf8_decode("EL SUBSECRETARIO DE PARTICIPACIÓN COMUNITARIA Y CONVIVENCIA DE LA"));
     $pdf->Ln(7);
      $pdf->Cell(60);
      $pdf->Cell(80,10,utf8_decode("GOBERNACIÓN DEL ATLÁNTICO"));
       $pdf->Ln(30);
      $pdf->Cell(80);
      $pdf->Cell(80,10,'CERTIFICA');
       $pdf->Ln(30);
      $pdf->Cell(40,10,utf8_decode("Que el señor(a) ".$nombre." identificado con cédula de ciudadanía No. "));
      $pdf->Ln(7);
      $pdf->Cell(40,10,utf8_decode($ced." se desempeña como Presidente de la JUNTA DE ACCIÓN COMUNAL "));
      $pdf->Ln(7);
      $pdf->Cell(40,10,utf8_decode($junta." del Municipio de ".$mun." Del Departamento del Atlántico,  "));
      $pdf->Ln(7);
      $pdf->Cell(40,10,utf8_decode("dignidad que ejercerá en el periodo 2016-2020."));
       $pdf->Ln(40);
      $pdf->Cell(40,10,utf8_decode("Dado en Barranquilla a los ".$hoy['mday']." días del mes de ".$meses[$hoy['mon']-1]." de ". $hoy['year']));
       $pdf->Ln(40);
    //   $pdf->Image('/home/ubuntu/workspace/images/firma.png',10,8,40);
      $pdf->Cell(40,10,'EDGARDO MENDOZA ORTEGA');
       $pdf->Ln(8);
      $pdf->Cell(40,10,utf8_decode("SubSecretario de Participación Comunitaria y Convivencia. "));
    $pdf->Output(F,'../docs/filename.pdf'); 
    $response["status"]="OK";
     echoResponse(200, $response);
    }
	 else {
	     $response["status"]="No existe";
	      echoResponse(200, $response);
	 }
    
});

?>