@extends('layouts.app')

@section('content')


@foreach ($cursos as $curso)
 <p><font size=10 face='Nunito'>Curso: {{ $curso->name }} </p>
 <a href="/cursos/{{$curso->id}}"> Saiba mais</a>

@endforeach
<body style='background-color:rgb(255, 255, 255)'>

@endsection