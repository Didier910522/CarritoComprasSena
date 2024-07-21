@extends('dashboard.master')
@section('titulo','NuevoIngreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
  <form action="{{ route('income.store') }}" method="post">
  @csrf
  <div class="form-group row">
  <label for="provider_id" class="col-sm-2 col-form-label">Id Proveedor</label>
           <div class="col-sm-10">
           <input type="text" class="form-control" name="provider_id" id="provider_id" placeholder="Ingresa Id proveedor">   
           </div>
  </div>
  <div class="form-group row">
        <label for="user_id" class="col-sm-2 col-form-label">Id Usuario</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="user_id" id="user_id" value="{{ $user->id }}" placeholder="Ingresa Id usuario">
             <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
        </div>
  </div>
  <div class="form-group row">
        <label for="receipt_type" class="col-sm-2 col-form-label">Tipo Recibo</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="receipt_type" id="receipt_type" placeholder="Ingresa tipo de recibo">
        </div>
  </div>
  <div class="form-group row">
        <label for="receipt_series" class="col-sm-2 col-form-label">Serie Recibo</label>
        <div class="col-sm-10">
             <input type="text" class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingresa serie recibo">
        </div>
  </div>
  <div class="form-group row">
        <label for="receipt_number" class="col-sm-2 col-form-label">Número Recibo</label>
        <div class="col-sm-10"> 
             <input type="text" class="form-control" name="receipt_number" id="receipt_number" placeholder="Ingresa número recibo">
        </div>
  </div>
  <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10"> 
        <input type="date" class="form-control" name="date" id="date" placeholder="Ingresa fecha">
        </div>
  </div>
  <div class="form-group row">
        <label for="tax" class="col-sm-2 col-form-label">Impuesto</label>
        <div class="col-sm-10"> 
        <input type="text" class="form-control" name="tax" id="tax" placeholder="Ingresa impuesto">
        </div>
  </div>
  <div class="form-group row">
        <label for="total" class="col-sm-2 col-form-label">Total</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="total" id="total" placeholder="Ingresa total">
        </div>
   </div>
   <div class="form-group row">
        <label for="status">Estado</label>
        <div class="col-sm-10">
             <select class="form-control" name="status" id="status">
                  <option value="2"></option>
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
             </select>
        </div>
    </div> 
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Registrar</button>  
           <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
        </div>
   </div> 
  </form> 
</div>

@endsection 