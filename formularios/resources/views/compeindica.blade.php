@extends('layout')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    TABLA DE EVALUACION 
                </div>
                <div class="card-body">
                    <form action="{{ route('compeindica.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Numero Competencia</label>                                
                            <input type="text" class="form-control" name="ncompetencia">
                        </div>
                        <div class="form-group">
                            <label for="">Numero Indicador</label>                                
                            <input type="text" class="form-control" name="nindicador">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                    <table class="table table-hover table_sm">
                        <thead>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                        </thead>
                        <tbody>
                            @foreach ($compeindica as $compeindica)
                            <tr>
                                <td>
                                    {{ $compeindica->compe_id  }}
                                </td>
                                
                                <td>
                                    {{ $compeindica->indica_id }}
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