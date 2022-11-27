@extends('layouts.app')

@section('content')

<p>{{$curso->name}}</p>
<p>{{$curso->descs}}</p>
<p>{{$curso->descc}}</p>
<p>{{$curso->maxalunos}}</p>
<p>{{$curso->minialunos}}</p>


@if($curso->alunos < 'minialunos')
Matrículas Abertas - Mínimo de alunos não atingido!
@endif

@if($curso->alunos == 'minialunos')
Matrículas Abertas - Curso acontecerá!
@endif

@if($curso->alunos == 'maxalunos')
Matrículas Encerradas
@endif


@endsection