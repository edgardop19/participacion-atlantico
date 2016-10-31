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
$app->post('/juntas/show', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
    $mun = $r->page->mun;
   
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
$app->post('/juntas/show2', function() use ($app) {
 /*   $r = json_decode($app->request->getBody());
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
    echoResponse(200, $response); */
    require('/home/ubuntu/workspace/PHPMailerAutoload.php');
    require('/home/ubuntu/workspace/class.phpmailer.php');
    require('/home/ubuntu/workspace/class.pop3.php');
    require('/home/ubuntu/workspace/class.smtp.php');
    

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'in-v3.mailjet.com;in-v3.mailjet.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '3004f957f3a3759d949ea1efcbd522da';                 // SMTP username
$mail->Password = '8fc08b893d9fd80bed95d38d61058fcc';                           // SMTP password
$mail->SMTPSecure = 'SSL';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = 'epenarandaa@uninorte.edu.co';
$mail->FromName = 'Default';
    // Add a recipient
$mail->addAddress('edgardop19@gmail.com');               // Name is optional


$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}); 
$app->post('/juntas/showDoc', function() use ($app) {
    $r = json_decode($app->request->getBody());
    $response = array();
    $db = new DbHandler();
   
    $pages = $db->getAllRecords("select DESCRIPCION,PALABRAS_CLAVES,CODJUNTA,ID from Documento order by CODJUNTA");
    if ($pages != NULL) {
		$pages_array = array();
		foreach($pages as $page){
			$pages_array['DESCRIPCION']= $page[0];	
			$pages_array['PALABRAS_CLAVES']= $page[1];	
			$pages_array['CODJUNTA']= $page[2];
			$pages_array['ID']= $page[3];
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
        
   $storage = new \Upload\Storage\FileSystem('/home/ubuntu/workspace/docs');
   $file = new \Upload\File('archivo', $storage);
   
    $page2Insert= array();
		$page2Insert['TIPO']="1";
		$page2Insert['DESCRIPCION']=$_POST['titulo'];
			$page2Insert['FECHA']="sysdate()";
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
        
   $storage = new \Upload\Storage\FileSystem('/home/ubuntu/workspace/imgs');
   $file = new \Upload\File('archivo', $storage);
   
    $page2Insert= array();
		$page2Insert['TITULO']=$_POST['titulo'];
		$page2Insert['INFORMACION']=$_POST['descripcion'];
		$page2Insert['RUTA']="/imgs/" . $file->getNameWithExtension();
		$page2Insert['Ubicacion']=$_POST['ubicacion'];
			$page2Insert['Fecha_creacion']="sysdate()";
			$page2Insert['Fecha_actualizacion']="sysdate()";
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
$app->post('/juntas/add', function() use ($app) {
    $response = array();
    $r = json_decode($app->request->getBody());
    $db = new DbHandler();
        
		$page2Insert= array();
		$page2Insert['TIPO']="1";
		$page2Insert['DESCRIPCION']=$r->page->titulo;
			$page2Insert['FECHA']="sysdate()";
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
$app->post('/juntas/delete', function() use ($app) {
    $response = array();
     $r = json_decode($app->request->getBody());
    $db = new DbHandler();
    $id = $r->page->docid;
    
    $pages = $db->getAllRecords("select RUTA from Documento where ID='$id'");
    if ($pages != NULL) {
		foreach($pages as $page){
			$ruta= $page[0];	
		}		
    }
    $pages = $db->deleteOneRecord("delete from Documento where ID='$id'");
    unlink('/home/ubuntu/workspace'.$ruta);
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
   	require('/home/ubuntu/workspace/fpdf.php');
 $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image('/home/ubuntu/workspace/images/logo.png',10,8,40);
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
      $pdf->Cell(40,10,utf8_decode("Dado en Barranquilla a los 27 días del mes de Octubre de 2016"));
       $pdf->Ln(40);
      $pdf->Cell(40,10,'EDGARDO MENDOZA ORTEGA');
       $pdf->Ln(8);
      $pdf->Cell(40,10,utf8_decode("SubSecretario de Participación Comunitaria y Convivencia. "));
    $pdf->Output(F,'/home/ubuntu/workspace/docs/filename.pdf'); 
    $response["status"]="OK";
     echoResponse(200, $response);
    }
	 else {
	     $response["status"]="No existe";
	      echoResponse(200, $response);
	 }
    
});

?>