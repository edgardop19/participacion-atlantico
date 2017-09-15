<?php

    //creamos la sesion
    session_start();
    //validamos si se ha hecho o no el inicio de sesion correctamente
    //si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['id'])) 
    {
        
        header('Location: login.html'); 
        
        exit();
    }

?> 

 <h3>Contenidos almacenados</h3>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Informacion</th>
        <th>Ubicacion</th>
        <th>Fecha</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody ng-init="listsCont()">
      <tr ng-repeat="cont in conts">
        <td>{{cont.TITULO}}</td>
        <td>{{cont.INFORMACION}}</td>
        <td>{{cont.Ubicacion}}</td>
        <td>{{cont.Fecha_actualizacion}}</td>
         <td>{{cont.Estado}}</td>
       
      </tr>
    </tbody>
  </table>
  
<div class="container">


<div class="form-group " >
      <label class="control-label requiredField" for="id">
       Contenidos
      </label>
      <select class="select form-control" ng-model="obj.id" name="id" required="required"  ng-init="listsCont()">
       <option value="Seleccione uno ...">
        Seleccione uno ...
       </option>
	   <optgroup ng-repeat="cont in conts">
        <option value="{{cont.ID}}">{{cont.TITULO}}</option>
		</optgroup>
      </select>
        <button class="btn btn-primary " name="Enviar" type="submit" ng-click="deleteCont(obj)">
        Eliminar
       </button>
     </div>



<div class="row">
<div class="col-lg-12">
                <h2>Nuevo contenido</h2>
                <p  class=""></p>
    
    <form method="post" class="col-md-7 col-sm-12 col-xs-12">
     <div class="form-group ">
      <label class="control-label requiredField" for="titulo">
       T&iacute;tulo
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" ng-model="page.titulo" name="titulo" placeholder="T&iacute;tulo" type="text"/>
     </div>
      <div class="form-group">
                            <label>Descripción *</label>
                            <textarea ng-model="page.descripcion" name="message" id="message" required="required" class="form-control" rows="8"></textarea>
      </div>       
     <div class="form-group " >
      <label class="control-label requiredField" for="ubicacion">
       Ubicación
       <span class="asteriskField">
        *
       </span>
      </label>
      <select class="select form-control" ng-model="page.ubicacion" name="ubicacion" required="required">
       <option value="Seleccione una ...">
        Seleccione una ...
       </option>
	   <optgroup >
        <option value="1">Comunicaciones</option>
		</optgroup>
		<optgroup >
        <option value="2">Galeria</option>
		</optgroup>
		<optgroup >
        <option value="3">Scroll principal</option>
		</optgroup>
      </select>
     </div>
      <div class="form-group " >
      <label class="control-label requiredField" for="estado">
       Estado
       <span class="asteriskField">
        *
       </span>
      </label>
      <select class="select form-control" ng-model="page.estado" name="estado" required="required">
       <option value="Seleccione uno ...">
        Seleccione uno ...
       </option>
	   <optgroup >
        <option value="1">Activo</option>
		</optgroup>
		<optgroup >
        <option value="2">Inactivo</option>
		</optgroup>
      </select>
     </div>
     <label class="control-label">Seleccione imagen</label>
  <input file-model="page.archivo"  type="file" class="file-loading" />
  <script>
  $(document).on('ready', function() {
      $("#input-6").fileinput({
          showUpload: false,
          maxFileCount: 1,
          mainClass: "input-group-lg"
      });
  });
  </script>
     
     
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="Enviar" type="submit" ng-click="upload2(page)">
        Cargar
       </button>
      </div>
     </div>
    </form>

</div>
</div>
</div><!-- /container -->