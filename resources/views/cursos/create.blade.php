@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta pagina podras crear cursos</h1>
    <form action="">
        <br>
        <label>
            Nombre: 
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>

        <br>
        <label>
            Categoria :
            <br>
            <input type="text" name="categoria">
        </label>

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
  