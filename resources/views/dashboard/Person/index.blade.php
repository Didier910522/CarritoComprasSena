@extends('dashboard.master')
@section('titulo','Personas')
@include('layouts/navigation')
@section('contenido')
<main>
     <div>
     <h1>Listado de Personas</h1>
     <br>
     <a href="{{url('dashboard/person/create')}}" class="btn btn-primary btn-sm">Nueva Persona</a>
     <table class="table table-dark table-striped">
          <thead>
               <tr>
                    <th>Id Persona</th>
                    <th>Tipo</th>
                    <th>Primer Nombre</th>
                    <th>Apellido</th>
                    <th>Tipo Documento</th>
                    <th>Número Documento</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
               </tr>
          </thead>
          <tbody>
               @foreach($person as $person)
               <tr>
                    <td scope="row">{{$person->id}}</td>
                    <td>{{$person->type}}</td>
                    <td>{{$person->First_Name}}</td>
                    <td>{{$person->Last_Name}}</td>
                    <td>{{$person->Document_Type}}</td>
                    <td>{{$person->Document_Number}}</td>
                    <td>{{$person->Adress}}</td>
                    <td>{{$person->Phone}}</td>
                    <td>{{$person->Email}}</td>
                    <td><a href="{{url('dashboard/person/'.$person->id.'/edit')}}" class="btn btn-warning class= bi bi-pencil"></i></td>
                    <td>
                         <form action="{{ url('dashboard/person/'.$person->id) }}" method="post">
                              @method('DELETE')
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

</main>
@endsection 