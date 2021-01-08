@extends('layout')

@section('content')

<header class="container row">
    <div class="col s12 grey lighten-4">        
        <h1 class=" center-align">Encuesta de Retiro</h1>
        <blockquote>
            La siguiente es una encuesta en donde esperamos usted nos ayude a evaluar nuestros aspectos positivos
            con el fin de resaltar el buen trabajo individual de cada colaborador y los aspectos a mejorar con el 
            fin de realizar seguimiento y contribuir al plan de mejora continua.
            <b>*Obligatorio</b>
        </blockquote>
    </div>   
</header>
<section class="informacion">
    <div class=" section container grey lighten-5">
        <div class="row">
            <form action="" class="col s12">
                <div class="row">
                    <div class="input-field col s12 m4 ">
                        <input id="cedula" type="text">
                        <label for="cedula">Cedula *</label>
                    </div>
                    <div class="input-field col s12 m4">
                        <input id="nombre" type="text">
                        <label for="nombre">Nombres y Apellidos Completos *</label>               
                    </div>
                    <div class="input-field col s12 m4">
                        <input id="date" type="date">
                        <label for="date">Fecha</label>               
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="empresa" type="text">
                        <label for="empresa">Empresa Contratante*</label><br>                
                        {{-- <select>
                            <option value="" >Elige</option>
                            <option value="">BRM</option>
                            <option value="">Activos</option>
                            <option value="">SLH</option>
                        </select> --}}
                    </div>
                    <div class="input-field col s12 m6">
                        <label for="">Cargo*</label>
                        <input type="text">
                        {{-- <select>
                            <option value="" >Elige</option>
                            <option value="">BRM</option>
                            <option value="">Activos</option>
                            <option value="">SLH</option>
                        </select> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea class="materialize-textarea" name="" id="cual" cols="50" rows="1" placeholder="Tu respuesta"></textarea>
                        <label for="cual" aria-placeholder=" Tu respuesta">¿Cuál?</label>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m4">
                        <input id="sede" type="text">
                        <label for="sede">Sede*</label>
                        {{-- <select>
                            <option value="" >Elige</option>
                            <option value="">BRM</option>
                            <option value="">Activos</option>
                            <option value="">SLH</option>
                        </select> --}}
                    </div>
                    <div class="input-field col s6 m4">
                        <input id="campaña" type="text">
                        <label for="campaña">Campaña *</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea class="materialize-textarea" name="" id="escampaña" cols="50" rows="1" placeholder="Tu respuesta"></textarea>
                        <label for="escampaña">Por favor especifique la campaña a la que pertenece (p.ej: Bancolombia consumo)</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <select id="estado" class="form-control text-center">
                            <option value="" disabled selected>"--Elige--"</option>
                            <option value="1">Capacitación</option>
                            <option value="2">En Operación</option>
                        </select>
                        <label for="estado">Estado*</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <label for="persepcion">Cómo percibió la Empresa durante el tiempo que laboró en ella. *</label><br>
                        <select id="persepcion" class="">
                            <option value="" disabled selected>Elige</option>
                            <option value="1">Excelente</option>
                            <option value="2">Bueno</option>
                            <option value="3">Regular</option>
                            <option value="4">Malo</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="escampaña">Califique los siguientes aspectos de acuerdo con su 
                            experiencia en el tiempo de labor en la Compañía *
                        </label><br>
                    </div>
                </div>
                <div class="row blue lighten-5">
                    <div class="col s4 center-align"></div>
                    <div class="col s2 center-align">Excelente</div>
                    <div class="col s2 center-align">Bueno</div>
                    <div class="col s2 center-align">Regular</div>
                    <div class="col s2 center-align">Malo</div>
                </div>
                <div class="row blue lighten-5">
                    <div class="col s4 center-align">Acompañamiento al trabajador
                        {{-- <label for="1">Acompañamiento al trabajador</label> --}}
                    </div>
                    <div class="col s2 center-align">
                        <input  type="text">
                    </div>
                    <div class="col s2 center-align">Bueno</div>
                    <div class="col s2 center-align">Regular</div>
                    <div class="col s2 center-align">Malo</div>
                </div>
            </form>
        </div>
    </div>
              <table class="center responsive-table">
                <thead>
                    <tr>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Acompañamiento al trabajador</td>
                        <td><input class="with-gap" name="group1" type="checkbox"  /></td>
                        <td><input type="checkbox"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Ambiente laboral</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Calidad humana</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Conocimientos adquiridos</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Crecimiento laboral</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Crecimiento personal</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Estabilidad laboral</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Funcionamiento de herramientas</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Horarios flexibles</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Proceso de capacitación</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Puesto de trabajo</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Puntualidad en los pagos</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Respuestas y soluciones oportunas</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Salario</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                </tbody>
            </table>
            <div>
                <label for="">
                    Si una o algunas de sus respuestas fueron calificadas como “regular” o “malo” por favor explique ¿por qué?
                </label><br>
                <textarea name="" id="" cols="50" rows="1" placeholder="Tu respuesta"></textarea>
            </div><br>
            <table>
                <div>
                    <label for="">Por favor marque SI o NO, de acuerdo con los aspectos que usted considera se deban mejorar *</label> 
                </div><br>
                <thead>
                    <tr>
                        <td></td>
                        <td>SI</td>
                        <td>NO</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Acompañamiento al trabajador</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Ambiente laboral</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Claridad condiciones laborales ( salario, comisión, variable, jornada laboral).</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Claridad condiciones de contratación ( tipo de contrato, eps, arl, caja de compensación)</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Infraestructura</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Puestos de trabajo</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Trato al empleado</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                </tbody>
            </table><br>
            <div>
                <label for="">
                    Para los casos anteriores que respondió “SI” favor explique ¿por qué?
                </label><br>
                <textarea name="" id="" cols="50" rows="1" placeholder="Tu respuesta"></textarea>
            </div><br>
            <div>
                <label for="">Trabajaría de nuevo en nuestra compañía *</label><br>
                <select>
                    <option value="" >Elige</option>
                    <option value="1">SI</option>
                    <option value="2">NO</option>                    
                </select>
            </div><br>
            <div>
                <label for="">¿Recomendaría nuestra compañía a un familiar o a un amigo? *</label><br>
                    <label for="">Si</label>
                    <input type="radio">
                    <label for="">No</label>
                    <input type="radio">
                    <label for="">Otro:</label>
                    <input type="text"> 
            </div><br>
            <div>
                <label for="">¿Por qué? *</label><br>
                <textarea name="" id="" cols="50" rows="1" placeholder="Tu respuesta"></textarea>
            </div><br>
            <div>
                <label for="">Nombre del Jefe Inmediato *</label><br>
                <input type="text">
            </div><br>
            <div>
                <label for="">¿Cómo describe el trato por parte de su Jefe Inmediato? *</label><br>
                <select>
                    <option value="" >Elige</option>
                    <option value="1">Excelente</option>
                    <option value="2">Bueno</option>
                    <option value="3">Regular</option>
                    <option value="4">Malo</option>                    
                </select>
            </div><br>
            <div>
                <label for="">Comentarios *</label><br>
                <textarea name="" id="" cols="50" rows="1" placeholder="Tu respuesta"></textarea>
            </div><br>
            <table>
                <div>
                    <label for="">Cómo califica el trato recibido por otras áreas de la Empresa *</label> 
                </div><br>
                <thead>
                    <tr>
                        <td></td>
                        <td>Excelente</td>
                        <td>Bueno</td>
                        <td>Regular</td>
                        <td>Malo</td>
                        <td>No aplica</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Talento humano</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Relaciones laborales</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Nómina</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Formación</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Calidad-Auditoria</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Seguridad</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Tecnología</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Salud Ocupacional</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Servicios Generales</td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                    </tr>
                </tbody>
            </table><br>
            <div>
                <label for="">¿Cómo describe el trato por parte de su Jefe Inmediato? *</label><br>
                <select>
                    <option value="">Elige</option>
                    <option value="1">Mejor salario - igual cargo en empresa de la industria de la publicidad</option>
                    <option value="2">Mejor cargo - mejor salario en empresa de la industria de la publicidad</option>
                    <option value="3">Otro cargo en empresa de la industria del Call Center</option>
                    <option value="4">Otro cargo en empresa de un sector diferente al Call Center</option>
                    <option value="5">Salario más alto en otra empresa de la industria del Call Center</option>
                    <option value="6">Salario más alto en empresa de un sector diferente al Call Center</option>
                    <option value="7">Relacionamiento y comunicación con el jefe</option>
                    <option value="8">Relacionamiento y comunicación con pares/compañeros</option>
                    <option value="9">Infraestructura/ puesto de trabajo</option>
                    <option value="10">Falta de acompañamiento / apoyo en la operación</option>
                    <option value="11">Horario laboral</option>
                    <option value="12">Viaje</option>
                    <option value="13">Salud</option>
                    <option value="14">Estudios</option>
                    <option value="15">Cambio de ciudad</option>
                    <option value="16">Calamidad familiar</option>
                    <option value="17">Tipo de contrato</option>
                    <option value="18">Problemas de distancia/ movilidad</option>
                </select>
            </div><br>
            <div>
                <label for="">
                    Desea presentar alguna sugerencia que usted considere apropiada para mejorar nuestros procesos, 
                    procedimientos y manejo en las diferentes áreas de la Empresa: *
                </label><br>
                <textarea name="" id="" cols="50" rows="1" placeholder="Tu respuesta"></textarea>
            </div><br>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        {{-- <a href="{{ route('welcome') }}" class="btn btn-danger">Cancelar</a>  --}}
    </form>   
</section><br>

@endsection
{{-- <div class="col-xs-11">
    <label for="observaciones_visita" id="label_observaciones_visita">Observaciones visita</label>
    <textarea name="" id="observaciones_visita" cols="30" class="form-control input-sm" rows="3">
    
    </textarea>
</div> --}}
