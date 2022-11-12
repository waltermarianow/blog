@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta pagina podras crear cursos</h1>
    <form action="">
        <label>
            Nombre: 
            <input type="text" name="name">
        </label>

        <label>
            Descripcion:
            <textarea name="descripcion" rows="5"></textarea>
        </label>

        
        <label>
            Categoria :
            <textarea name="descripcion" rows="5"></textarea>
        </label>

    </form>
@endsection
  