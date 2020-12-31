@extends('layout')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    COMPETENCIAS
                </div>
                <div class="card-body">
                    <form action="{{ route('competencia.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">COMPETENCIA</label>                                
                            <input type="text" class="form-control" name="competencia">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                    <table class="table table-hover table_sm">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                        </thead>
                        <tbody>
                            @foreach ($competencias as $competencia)
                            <tr>
                                <td>
                                    {{ $competencia->id }}
                                </td>
                                <td>
                                    {{ $competencia->nombre }}
                                </td>
                            </tr>
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

@endsection