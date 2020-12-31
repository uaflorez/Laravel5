@extends('layout')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    INDICADORES CONDUCTUALES
                </div>
                <div class="card-body">
                    <form action="{{ route('indicator.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">NOMBRE</label>                                
                            <input type="text" class="form-control" name="indicador">
                        </div>
                        <div class="form-group">
                            <label for="">COMPETENCIA</label>                                
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                    <table class="table table-hover table_sm">
                        <thead>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Competencia</th>
                        </thead>
                        <tbody>
                            @foreach ($indicador as $indicadores)
                            <tr>
                                <td>
                                    {{ $indicadores->id }}
                                </td>
                                <td>
                                    {{ $indicadores->description }}
                                </td>
                                <td>
                                    {{ $indicadores->compe_id }}
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