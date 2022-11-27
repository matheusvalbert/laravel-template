@extends('layouts.app')

@section('content')

<p>Nome do curso: {{$curso->name}}</p>
<p>Descrição simples: {{$curso->descs}}</p>
<p>Descrição composta: {{$curso->descc}}</p>
<p>Maximo de alunos: {{$curso->maxalunos}}</p>
<p>Minimode alunos: {{$curso->minialunos}}</p>
<p>Numero de alunos inscritos: {{$curso->ndalunos}}</p>


@if($curso->alunos < 'minialunos')
Matrículas Abertas - Mínimo de alunos não atingido!
@endif

@if($curso->alunos == 'minialunos')
Matrículas Abertas - Curso acontecerá!
@endif

@if($curso->alunos == 'maxalunos')
Matrículas Encerradas
@endif


 <p>Curso: {{ $curso->name }} </p>
 <a href="/cursos/{{$curso->id}}"> inscreva-se</a>



@endsection