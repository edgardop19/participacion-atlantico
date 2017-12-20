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

  <h2  ng-init="getMunicipio()">{{municipioSel[0].Nombre}}</h2>
   <h3>Juntas de acción comunal</h3>
   
   
   <button type="button" class="btn btn-primary spaced" data-toggle="modal" data-target="#ModalNuevaJAC">Nueva JAC</button>
   
<table datatable="ng" class="row-border hover table table-hover" id="juntastable" dt-options="dtOptions" >
    <thead>
      <tr>
        <th>Jurisdicción</th>
        <th>Resolución</th>
        <th>Cédula</th>
        <th>Presidente</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="junta in juntas">
        <td>{{junta.jurisdiccion}}</td>
        <td>{{junta.resolucion}}</td>
        <td>{{junta.cc}}</td>
        <td>{{junta.nombre}}</td>
        <td>
        <!--  <button class="btn btn-primary " name="Enviar" type="submit" onClick="location.href = '#/actd/{{doc.ID}}' "> -->
       <a href="#/actj/{{junta.cod}}">Editar</a>
       <button class="btn btn-primary " name="Enviar" type="submit" ng-click="deleteJac(junta)">
        Eliminar
       </button>
        </td>
      </tr>
    </tbody>
  </table>
  
<div class="container">
<!--
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
-->

<!-- Modal -->
<div id="ModalNuevaJAC" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">


<div class="row">
<div class="col-lg-12">
                <h2>Nueva JAC</h2>
                <p  class=""></p>
    
    <form method="post" class="col-md-7 col-sm-12 col-xs-12">
         <label class="control-label requiredField" for="titulo">
       Municipio
       <span class="asteriskField">
        *
       </span>
      </label>
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
          <button class="btn btn-primary "  id="CrearJAC" name="Enviar" type="submit" ng-click="createj(page)" data-dismiss="ModalNuevaJAC">
        Crear
       </button>
      </div>
     </div>
     
     
    </form>

</div>
</div>
</div>
</div>
</div>

</div><!-- /container -->