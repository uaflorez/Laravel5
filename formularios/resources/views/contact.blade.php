@extends('layout')

@section('title','Contact')


@section('content')

    <h1>estas en contact</h1>
    <form method="POST" action=" {{ route('contact') }} ">
        @csrf
        <input name="name" placeholder="Nombre..." value="{{ old('name') }}" ><br>
        {!! $errors->first('name','<small>:messages</small><br>' ) !!}

        <input name="email" type="email" placeholder="email" value="{{ old('email') }}" ><br>
        {!! $errors->first('email','<small>:messages</small><br>' ) !!}

        <input name="subject" placeholder="Asunto..." value="{{ old('subject')}}" ><br>
        {!! $errors->first('subject','<small>:messages</small><br>' ) !!}

        <textarea name="content" placeholder="Mensaje..." >{{ old('content') }}</textarea><br>
        {!! $errors->first('content','<small>:messages</small><br>' ) !!}

        <button>Enviar</button>
    </form>
@endsection
{{-- estos datos que estan entre {!! -- !!} son para validar los datos y para que retorne los datos ingresados en el formulario 
para que el usuario no tenga que volver a diligenciar los sobre todo en los formularios que son bastante grandes  --}}