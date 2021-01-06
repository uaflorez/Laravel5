@extends('layout')

@section('contenido')
    <div class="container">
        <h1>Competencias</h1>

        <ul>
            @foreach ($competencias as $competencias)
                <li> {{ $competencias->nombre }} </li>
            @endforeach
        </ul>
    </div>
@endsection