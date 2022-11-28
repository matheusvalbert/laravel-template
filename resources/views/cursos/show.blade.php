@extends('layouts.app')

@section('content')

<p>Nome do curso: {{$curso->name}}</p>
<p>Descrição simples: {{$curso->descs}}</p>
<p>Descrição composta: {{$curso->descc}}</p>
<p>Maximo de alunos: {{$curso->maxalunos}}</p>
<p>Minimo de alunos: {{$curso->minialunos}}</p>



@if($curso->alunos < 'minialunos')
Matrículas Abertas - Mínimo de alunos não atingido!
@endif

@if($curso->alunos == 'minialunos')
Matrículas Abertas - Curso acontecerá!
@endif

@if($curso->alunos == 'maxalunos')
Matrículas Encerradas
@endif



<a href="/zas/{{$curso->id}}"><br />inscreva-se</a>
 


@endsection