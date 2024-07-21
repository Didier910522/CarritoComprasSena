@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')

<div class='container-py-4'>
    <h1>Listado de Ingresos</h1>
    <br>
    <a href="{{url('dashboard/income/create')}}" class="btn btn-primary btn-sm">Nuevo Ingreso</a> 
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id Ingreso</th>
                <th>Id Proveedor</th>
                <th>Id Usuario</th>
                <th>Tipo de Recibo</th>
                <th>Serie de Recibo</th>
                <th>Número de Recibo</th>
                <th>Fecha</th>
                <th>Impuesto</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>

            @foreach($income as $income)
            <tr>
                <td scope="row">{{$income->id}}</td>
                <td>{{$income->provider_id}}</td>
                <td>{{$income->user_id}}</td>
                <td>{{$income->receipt_type}}</td>
                <td>{{$income->receipt_series}}</td>
                <td>{{$income->receipt_number}}</td>
                <td>{{$income->date}}</td>
                <td>{{$income->tax}}</td>
                <td>{{$income->total}}</td>
                <td>{{$income->status ? _('Activo') : _('Inactivo')}}</td>
                <td>
                    <a href="{{url('dashboard/income/'.$income->id.'/edit')}}" class="btn btn-warning class= bi bi-pencil"></a></td>
                <td>
                     <form action="{{ url('dashboard/income/'.$income->id) }}" method="post">
                       @method("DELETE")
                       @csrf
                       <button class="btn btn-danger class=bi bi-eraser-fill" type="submit"></button>
                </form>
                </td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 