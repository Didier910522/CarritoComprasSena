@extends('dashboard.master')
@section('titulo','NuevaPersona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
<h1 class="mb-4">Modificar Persona</h1>    
  <form action="{{ url('dashboard/person/'.$person->id) }}" method="post">
   @csrf
   @method('PUT')
   <div class="form-group row">
        <label for="type">Tipo</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="type" id="type" value="{{$person->type}}" placeholder="Ingresa el tipo">
        </div>
   </div>
   <div class="form-group row">
        <label for="First_Name">Primer Nombre</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="First_Name" id="First_Name" value="{{$person->First_Name}}" placeholder="Ingresa su primer nombre">       
        </div>
   </div>
   <div class="form-group row">
        <label for="Last_Name">Apellido</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="Last_Name" id="Last_Name" value="{{$person->Last_Name}}" placeholder="Ingresa su apellido">       
        </div>
   </div>
   <div class="form-group row">
        <label for="Document_Type">Tipo Documento</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="Document_Type" id="Document_Type" value="{{$person->Document_Type}}" placeholder="Ingresa su tipo de documento">       
        </div>
   </div>
   <div class="form-group row">
        <label for="Document_Number">Número Documento</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="Document_Number" id="Document_Number" value="{{$person->Document_Number}}" placeholder="Ingresa su númeero de documento">       
        </div>
   </div>
   <div class="form-group row">
        <label for="Adress">Dirección</label>
        <div class="col-sm-10">
              <input type="text" class="form-control" name="Adress" id="Adress" value="{{$person->Adress}}" placeholder="Ingresa su dirección">       
        </div>
   </div>
   <div class="form-group row">
        <label for="Phone">Teléfono</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="Phone" id="Phone" value="{{$person->Phone}}" placeholder="Ingresa su número de teléfono">       
        </div>
   </div>
   <div class="form-group row">
        <label for="Email">Correo electrónico</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="Email" id="Email" value="{{$person->Email}}" placeholder="Ingresa su correo electrónico">       
        </div>
   </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Actualizar</button>  
           <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
        </div>
   </div> 
  </form> 
</div>

@endsection 