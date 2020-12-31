@extends('plantilla')

@section('title')
    Formulario AR-FR-49
@endsection

@section('header')
<div class="container">
    <div class="container">
        <div class="row row-cols-auto">
            <div class="col-sm">
                <img src="image/Imagen1.png" width="100px" alt="BRM" />
            </div>
            <div class="col-sm">
                <b>BRM S.A.</b>
            </div>
            <div class="col-sm">
                <b>EVALUACION ASSESSMENT <br />
                CENTER-COMERCIAL</b>
            </div>
            <div class="col-sm">
                Código: <b>AR-FR-49</b><br />
                Actualización: 0 <br />
                Páginas: 1 <br />
                Vigente desde: 25/02/2017
            </div>
            <div class="col-sm">
                Elaborado por: <br />
                <b>Gerente de Procesos</b> <br/>
                25/02/2017
            </div>
            <div class="col-sm">
                Revisado por: <br />
                <b>Representante del Sistema</b> <br />
                25/02/2017
            </div>
            <div class="col-sm">
                Aprobo: <br />
                <b>Presidente</b> <br />
                25/02/2017
            </div>
        </div>
    </div>
    <br>
    <div class="row datos">
        <form class="col s10">
            @csrf
            <div class="row">
                <div class="input-field col s4">
                    <input id="campaña" type="text" class="validate" />
                    <label for="campaña">CAMPAÑA</label>
                </div>
                <div class="input-field col s3">
                    <input id="numero" type="text" class="validate" />
                    <label for="numero">NUMERO</label>
                </div>
                <div class="input-field col s3">
                    <input id=" fecha" type="date" class="validate" />
                    <label for="fecha">FECHA</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                    <input id="first_name" type="text" class="validate" />
                    <label for="first_name">NOMBRE DEL CANDIDATO</label>
                </div>
                <div class="input-field col s3">
                    <input id="cedula" type="text" class="validate" />
                    <label for="cedula">CEDULA</label>
                </div>
            </div>
        </form>
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
    <br>
    
    <br><br>
    <div class="row">
        <form action="">
        <h3>PLANEACION Y ORGANIZACION</h3>
        <label for="">Realiza saludo de bienvenida</label>
        <input type="text"><br>
        <label for="">Define el propósito de la llamada</label>
        <input type="text">
        <label for="">Realiza el cierre de veta (logra aceptación por parte del cliente)</label>
        <input type="text">
        <label for="">Oferta el producto - Argumentando beneficios</label>
        <input type="text">
        </form>
    </div>

    <table class="responsive-table table2">
        <thead>
            <tr>
                <th>COMPETENCIA</th>
                <th>INDICADOR CONDUCTUAL</th>
                <th>PUNTUACION (DE 1 A 3)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PLANEACION Y ORGANIZACION</td>
                <td>Realiza saludo de bienvenida</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Define el propósito de la llamada</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Realiza el cierre de veta (lograaceptacion por parte del cliente)</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Oferta el producto - Argumentando beneficios</td>
                <td></td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>PENSAMIENTO ANALITICO</td>
                <td>Maneja las objeciones ( Otorga respuestas precisas)</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Realiza cierre de venta (Logra aceptación por parte del cliente)</td>
                <td></td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>ORIENTACIÓN Y DESARROLLO DE PERSONAS</td>
                <td>Vocaliza de forma clara y maneja buen tono de voz</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Es preciso y concreto al brindar la información (precios, fechas, entre otros)</td>
                <td></td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>ORIENTACIÓN AL LOGRO CON CALIDAD</td>
                <td>Escucha activa ( Pregunta un dato solo una vez)</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Se muestra seguro ( Evita dubitativas, muletillas, diminutivos)</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Hace uso de etiqueta telefónica (Utiliza palabras de cortesía - Por favor - Gracias)</td>
                <td></td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>AUTOGESTIÓN </td>
                <td>Se muestra altamente interesado por el ejercicio</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Se muestra activo y enérgico durante la llamada</td>
                <td></td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>TOTAL</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <table class="centered responsive-table table1">
        <thead>
            <tr>
                <th>CONVERSION</th>
                <th>NIVEL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>80% - 100% (superior a 31 puntos)</td>
                <td>AVANZADO</td>
            </tr>
            <tr>
                <td>65% - 79% (Desde 25 a 30 puntos)</td>
                <td>INTERMEDIO</td>
            </tr>
            <tr>
                <td>0% - 64% (Inferior a 24 puntos)</td>
                <td>BAJO (NO CONTINUA)</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <div class="row profecional">
        <div class="input-field s5">
            <input id="fortaleza" type="text" class="validate" />
            <label for="fortaleza">FORTALEZAS</label>
        </div>
        <div class="input-field s5">
            <input id="oportu" type="text" class="validate" />
            <label for="oportu">OPORTUNIDADES DE MEJORA</label>
        </div>
        <div class="row form_pro">
            <div class="col s12 m7">
                <div class="card-content black-text">
                    <span class="card-title">CONCEPTO PROFESIONAL DE SELECCION</span>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-content black-text">
                    <form action="#">
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>CUMPLE</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>NO CUMPLE</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>CONSIDERACIÓN</span>
                            </label>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row profecional2">
        <div class="row form_pro">
            <div class="col s12 m7">
                <div class="card-content black-text">
                    <span class="card-title">CONCEPTO SEGUNDO EVALUADOR</span>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-content black-text">
                    <form action="#">
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>CUMPLE</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>NO CUMPLE</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>CONSIDERACIÓN</span>
                            </label>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <div class="input-field m5">
            <input id="fortaleza1" type="text" class="validate" />
            <label for="fortaleza1">FORTALEZAS</label>
        </div>
        <div class="input-field s7">
            <input id="oportu1" type="text" class="validate" />
            <label for="oportu1">OPORTUNIDADES DE MEJORA</label>
        </div>
    </div>

</div>
@endsection