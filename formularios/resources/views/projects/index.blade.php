@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Proyectos</h1>

    @auth
        <a href=" {{ route('projects.create') }} ">Crear un nuevo proyecto</a>
    @endauth

    
    

    <ul>      
        @forelse ($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>   </li>
        @empty
            <li>No hay proyectos para mostrar</li>          
        @endforelse

        {{ $projects->links() }}
    </ul>
@endsection

{{-- <br> <small> {{ $portfolioItem->description }} </small>
                <br> {{ $portfolioItem->updated_at->diffForHumans() }}  esto va despues de el title--}}