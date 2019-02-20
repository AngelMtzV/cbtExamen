@extends('layouts.app')

@section('content')
  <div class="jumbotron">
    <div class="row float-right">
      <button class="btn btn-primary" type="button" disabled>
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        <p class="lead">Tiempo: <span class="badge badge-light" id="minutos">0</span>:<span class="badge badge-light" id="segundos">0</span></p>
      </button>
    </div>
    <div id="myProgress">
      <div id="myBar"></div>
    </div>
    <h1 class="display-4">Examen de {{ $examen->nombre }}!</h1>
    <hr class="my-4">
      @foreach($preguntas as $pre)
        <p id="pregunta">
          <input hidden type="text" id="idPregunta" name="idPregunta" value="{{ $pre->id }}">
              {{ $pre->id }}.- {{ $pre->pregunta }}
        </p>
        <div id="opciones" class="contairner">
          <select class="custom-select" multiple> 
            <option class="list-group-item list-group-item-action" value="1">
              1.- {{ $pre->opcion1 }}
            </option>
            <option class="list-group-item list-group-item-action" value="2">
              2.- {{ $pre->opcion2 }}
            </option>
            <option class="list-group-item list-group-item-action" value="3">
              3.- {{ $pre->opcion3 }}
            </option>
            <option class="list-group-item list-group-item-action" value="4">
              4.- {{ $pre->opcion4 }}
            </option>
          </select>
        </div>
      @endforeach
        <hr>
  </div>   
</div>
@endsection

