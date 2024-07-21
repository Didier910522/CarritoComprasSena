@extends('dashboard.master')
@section('titulo','NuevoIngreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
<h1 class="mb-4">Modificar Ingreso</h1>  
  <form action="{{ url('dashboard/income/'.$income->id) }}" method="post">
   @csrf
   @method('PUT')
  <div class="form-group row">
        <label for="receipt_type" class="col-sm-2 col-form-label">Tipo Recibo</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="receipt_type" id="receipt_type" value="{{$income->receipt_type}}"  placeholder="Ingresa tipo de recibo">
        </div>
  </div>
  <div class="form-group row">
        <label for="receipt_serie" class="col-sm-2 col-form-label">Serie Recibo</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="receipt_serie" id="receipt_serie" value="{{$income->receipt_serie}}" placeholder="Ingresa serie recibo">
        </div>
  </div>
  <div class="form-group row">
        <label for="receipt_number" class="col-sm-2 col-form-label">Número Recibo</label>
        <div class="col-sm-10"> 
        <input type="text" class="form-control" name="receipt_number" id="receipt_number" value="{{$income->receipt_number}}" placeholder="Ingresa número recibo">
        </div>
        </div>
  <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10"> 
        <input type="date" class="form-control" name="date" id="date" value="{{$income->date}}" placeholder="Ingresa fecha">
        </div>
  </div>
  <div class="form-group row">
        <label for="tax" class="col-sm-2 col-form-label">Impuesto</label>
        <div class="col-sm-10"> 
        <input type="text" class="form-control" name="tax" id="tax" value="{{$income->tax}}" placeholder="Ingresa impuesto">
        </div>
  </div>
  <div class="form-group row">
        <label for="total" class="col-sm-2 col-form-label">Total</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="total" id="total" value="{{$income->total}}" placeholder="Ingresa total">
        </div>
   </div>
   <div class="form-group row">
        <label for="status">Estado</label>
        <div class="col-sm-10">
             <select class="form-control" name="status" id="status">
                  <option value="1" {{ $income->status == 1 ? 'selected' : '' }}>Activo</option>
                  <option value="0" {{ $income->status == 0 ? 'selected' : '' }}>Inactivo</option>
             </select>
        </div>
    </div> 
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-success">Actualizar</button>  
           <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
        </div>
   </div> 
  </form> 
</div>

@endsection 