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

   <h3>Juntas de acción comunal</h3>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Jurisdicción</th>
        <th>Resolución</th>
        <th>Cédula</th>
        <th>Presidente</th>
      </tr>
    </thead>
    <tbody ng-init="listsJac()">
      <tr ng-repeat="junta in juntas">
        <td>{{junta.jurisdiccion}}</td>
        <td>{{junta.resolucion}}</td>
        <td>{{junta.cc}}</td>
        <td>{{junta.nombre}}</td>
        <td>
        <!--  <button class="btn btn-primary " name="Enviar" type="submit" onClick="location.href = '#/actd/{{doc.ID}}' "> -->
       <a href="#/actj/{{junta.cod}}">Editar</a>
        </td>
      </tr>
    </tbody>
  </table>
  
<div class="container">

<div class="form-group " >
      <label class="control-label requiredField" for="docid">
       Juntas
      </label>
      <select class="select form-control" ng-model="obj.cod" name="cod" required="required" ng-init="listsJac()">
       <option value="Seleccione uno ...">
        Seleccione uno ...
       </option>
	   <optgroup ng-repeat="junta in juntas">
        <option value="{{junta.cod}}">{{junta.jurisdiccion}}</option>
		</optgroup>
      </select>
        <button class="btn btn-primary " name="Enviar" type="submit" ng-click="deleteJac(obj)">
        Eliminar
       </button>
     </div>


<div class="row">
<div class="col-lg-12">
                <h2>Nueva JAC</h2>
                <p  class=""></p>
    
    <form method="post" class="col-md-7 col-sm-12 col-xs-12">
     <select class="select form-control" ng-model="page.mun" name="mun" required="required"  ng-init="listsMun2()" >
       <option value="Seleccione uno ...">
        Seleccione uno ...
       </option>
	   <optgroup ng-repeat="munn in muns">
        <option value="{{munn.ID}}">{{munn.Nombre}}</option>
		</optgroup>
      </select>
     <div class="form-group ">
      <label class="control-label requiredField" for="titulo">
       Jurisdicción
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" ng-model="page.jurisdiccion" name="jurisdiccion" placeholder="Jurisdicción" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="titulo">
       Resolución
      </label>
      <input class="form-control" ng-model="page.resolucion" name="resolucion" placeholder="Resolución" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="titulo">
       Cédula
      </label>
      <input class="form-control" ng-model="page.cedula" name="cedula" placeholder="Cédula" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="titulo">
       Nombre
      </label>
      <input class="form-control" ng-model="page.nombre" name="nombre" placeholder="Resolución" type="text"/>
     </div>
     
 
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="Enviar" type="submit" ng-click="createj(page)">
        Crear
       </button>
      </div>
     </div>
     
     
    </form>

</div>
</div>
</div><!-- /container -->