@extends('dashboard.master')
@section('titulo','NuevaPersona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
  <form action="{{ route('person.store') }}" method="post">
   @csrf
  <div class="form-group row">
        <label for="type" class="col-sm-2 col-form-label">Seleccione una opción</label>
        <div class="col-sm-10">
             <select class="form-control" name="type" id="type">
                  <option value="">Seleccione Tipo</option>
                  <option value="Persona Natural">Persona Natural</option>
                  <option value="Empresa">Empresa</option>
                  <option value="Proveedor">Proveedor</option>
             </select>
        </div>
  </div>
  <div class="form-group row">
        <label for="First_Name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="First_Name" id="First_Name" placeholder="Ingresa su nombre">
        </div>
  </div>
  <div class="form-group row">
        <label for="Last_Name" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Ingresa su apellido">
        </div>
  </div>
  <div class="form-group row">
        <label for="Document_Type" class="col-sm-2 col-form-label">Tipo de documento</label>
        <div class="col-sm-10">
              <select class="form-control" name="Document_Type" id="Document_Type">
                  <option value="">Seleccione Tipo de Documento</option>
                  <option value="CC">Cédula de Ciudadania</option>
                  <option value="TI">Tarjeta de Identidad</option>
                  <option value="Pasaporte">Pasaporte</option>
                  <option value="Nit">Nit</option>
              </select>
        </div>
  </div>
  <div class="form-group row">
        <label for="Document_Number" class="col-sm-2 col-form-label">N° Documento</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="Document_Number" id="Document_Number" placeholder="Ingresa su número de documento">
        </div>
  </div>
  <div class="form-group row">
        <label for="Adress" class="col-sm-2 col-form-label">Dirección</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="Adress" id="Adress" placeholder="Ingresa su dirección">
        </div>
  </div>
  <div class="form-group row">
        <label for="Phone" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Ingresa su número de teléfono">
        </div>
  </div>     
  <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="Email" id="Email" placeholder="Ingresa su correo electrónico">
        </div>
  </div>
  <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Registrar</button>  
           <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
        </div>
   </div> 
  </form> 
</div>
@endsection 