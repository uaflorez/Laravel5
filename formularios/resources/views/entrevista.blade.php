@extends('layout')
@extends('prueba')
@section('contenido')
<br>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Formuario Evaluado
                    </div>
                    <div class="card-body">
                        <form action=" {{  route('entrevista.store') }}  " method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">CAMPAÑA</label>                                
                                <input type="text" class="form-control" name="campaña">
                            </div>
                            <div class="form-group">
                                <label for="">NÚMERO</label>
                                <input type="text" class="form-control" name="numero">
                            </div>
                            <div class="form-group">
                                <label for="fecha">FECHA</label>
                                <input id=" fecha" type="date" class="form-control" name="fecha">
                            </div>
                            <div class="form-group"> 
                                <label for="">NOMBRE CANDIDATO</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="">NÚMERO CEDULA</label>
                                <input type="text" class="form-control" name="cedula">
                            </div>
                            <br>
                            <div class="row nota">
                                <div class="col s12 ">
                                    <div class="card-title black-text">
                                        <span class="card-title">Nota para la evaluación de assessment center tenga presente la
                                            siguiente escala:
                                        </span> <br>
                                        <span class="card-content black-text">
                                            Posee la competemcia (PC) Corresponde a 3 puntos <br />
                                            Por Desarrollar la competemcia (PD) Corresponde a 2 puntos <br />
                                            No posee la competemcia (NP) Corresponde a 1 puntos <br />
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-hover table_sm">
                                <thead>
                                    <th>Competencia</th>
                                    <th>Descripcion</th>
                                    <th>Puntuacion de (1 a 3)</th>
                                </thead>
                                <tbody>
                                    @foreach ($indicador as $indicadores)
                                    <tr>
                                        <td>
                                            {{ $indicadores->compe_id }}
                                        </td>
                                        <td>
                                            {{ $indicadores->description }}
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="form-group">
                                <label for="">TOTAL</label>
                                <input type="text" class="form-control" name="total">
                            </div>
                            <br>                            
                            <table class="table table-hover table_sm">
                                <thead>
                                    <th>CONVERSION</th>
                                    <th>NIVEL</th>
                                </thead>
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            80% - 100%  (superior a 31 puntos)
                                        </td>                                    
                                        <td>
                                            AVANZADO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            65% - 79% ( Desde 25 a 30 puntos)
                                        </td>                                    
                                        <td>
                                            INTERMEDIO
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            0% - 64% ( Inferior de 24 puntos)
                                        </td>                                    
                                        <td>
                                            BAJO (NO CONTINUA)
                                        </td>
                                    </tr>                           
                                </tbody>
                            </table>
                            <br>
                            <div class="form-group">
                                <label for="">FORTALEZAS</label>
                                <input type="text" class="form-control" name="fortaleza_pim">
                            </div> 
                            <div class="form-group">
                                <label for="">OPORTUNIDADES DE MEJORA</label>
                                <input type="text" class="form-control" name="mejora_prim">
                            </div> 
                            <br>
                            <div class="form-group">
                                <label for="">CONCEPTO PROFESIONAL SELECCIÓN</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="cumple_prim" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">CUMPLE</label>
                                </div> 
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="no_cumple_prim" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2"> NO CUMPLE</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="consideracion_prim" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">CONSIDERACION</label>
                                </div>
                            </div>
                            <br>                            
                            <div class="form-group">
                                <label for="">CONCEPTO SEGUNDO EVALUADOR</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="cumple_seg" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">CUMPLE</label>
                                </div> 
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="no_cumple_seg" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2"> NO CUMPLE</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="consideracion_seg" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">CONSIDERACION</label>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">FORTALEZAS</label>
                                <input type="text" class="form-control" name="fortaleza_seg">
                            </div> 
                            <div class="form-group">
                                <label for="">OPORTUNIDADES DE MEJORA</label>
                                <input type="text" class="form-control" name="mejora_seg">
                            </div> 
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('home') }}" class="btn btn-danger">Cancelar</a>            
                                    
                        </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    

                            
    <!-- <div class="row nota">
        <div class="col s12 ">
            <div class="card-title black-text">
                <span class="card-title">Nota para la evaluación de assessment center tenga presente la
                    siguiente escala:
                </span> <br>
                <span class="card-content black-text">
                    Posee la competemcia (PC) Corresponde a 3 puntos <br />
                    Por Desarrollar la competemcia (PD) Corresponde a 2 puntos <br />
                    No posee la competemcia (NP) Corresponde a 1 puntos <br />
                </span>
            </div>
        </div>
    </div>        -->
</body>
   
<br>
    
@endsection