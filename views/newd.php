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

   <h3>Documentos almacenados</h3>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Palabras claves</th>
        <th>Junta</th>
        <th>Ref</th>
      </tr>
    </thead>
    <tbody ng-init="listsDoc()">
      <tr ng-repeat="doc in docs">
        <td>{{doc.DESCRIPCION}}</td>
        <td>{{doc.PALABRAS_CLAVES}}</td>
        <td>{{doc.CODJUNTA}}</td>
        <td>{{doc.ID}}</td>
       <!-- <td> -->
        <!--  <button class="btn btn-primary " name="Enviar" type="submit" onClick="location.href = '#/actd/{{doc.ID}}' "> -->
      <!-- <a href="#/actd/{{doc.ID}}">Editar</a>  </td> -->
      </tr>
    </tbody>
  </table>
  
<div class="container">

<div class="form-group " >
      <label class="control-label requiredField" for="docid">
       Documentos
      </label>
      <select class="select form-control" ng-model="obj.docid" name="docid" required="required"  ng-init="listsDoc()">
       <option value="Seleccione uno ...">
        Seleccione uno ...
       </option>
	   <optgroup ng-repeat="doc in docs">
        <option value="{{doc.ID}}">{{doc.DESCRIPCION}}</option>
		</optgroup>
      </select>
        <button class="btn btn-primary " name="Enviar" type="submit" ng-click="deleteDoc(obj)">
        Eliminar
       </button>
     </div>


<div class="row">
<div class="col-lg-12">
                <h2>Nuevo documento</h2>
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
     <div class="form-group ">
      <label class="control-label requiredField" for="titulo">
       Palabras claves
      </label>
      <input class="form-control" ng-model="page.palabras" name="palabras" placeholder="Palabras claves" type="text"/>
     </div>
    
     <div class="form-group " ng-app data-ng-controller="munController" >
      <label class="control-label requiredField" for="mun">
       Municipio
       <span class="asteriskField">
        *
       </span>
      </label>
      <select class="select form-control" ng-model="page.mun" name="mun" required="required"  ng-init="listsMun2()" ng-change="listsJac3(page.mun)">
       <option value="Seleccione uno ...">
        Seleccione uno ...
       </option>
	   <optgroup ng-repeat="munn in muns">
        <option value="{{munn.ID}}">{{munn.Nombre}}</option>
		</optgroup>
      </select>
    
      <label class="control-label requiredField" for="juntaId">
       Junta de acción comunal
       <span class="asteriskField">
        *
       </span>
      </label>
      <select class="select form-control" ng-model="page.juntaId" ng-options="junta.jurisdiccion for junta in juntas"  name="juntaId" required="required"  >
         
      </select>
     </div>
     
     
     
     
     <label class="control-label">Seleccione el archivo</label>
  <input file-model="page.archivo"  type="file"  />
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
       <button class="btn btn-primary " name="Enviar" type="submit" ng-click="upload(page)">
        Cargar
       </button>
      </div>
     </div>
     
     
    </form>

</div>
</div>
</div><!-- /container -->