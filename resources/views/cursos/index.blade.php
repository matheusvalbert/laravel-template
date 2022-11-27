@extends('layouts.app')

@section('content')


@foreach ($cursos as $curso)
 <p>Curso: {{ $curso->name }} </p>
 <a href="/curso/{{$curso->id}}"> Saiba mais</a>

@endforeach


@endsection