@extends('layouts.app')

@section('content')


<p><font size=15 face='Nunito'><span style='color:blue;'>{{$curso->name}}</p>
<p><font size=7 face='Nunito'><span style='color:rgb(255, 255, 255);'>{{$curso->descs}}</p>
<p><font size=7 face='Nunito'><span style='color:rgb(255, 255, 255);'>{{$curso->descc}}</p>
<p><font size=5 face='Nunito'><span style='color:rgb(255, 255, 255);'>Maximo de alunos: {{$curso->maxalunos}}</p>
<p><font size=5 face='Nunito'><span style='color:rgb(255, 255, 255);'>Minimo de alunos exigido: {{$curso->minialunos}}</p>





@if($curso->alunos < 'minialunos')
<span style='color:rgb(255, 255, 255);'>Matrículas Abertas - Mínimo de alunos não atingido!
@endif

@if($curso->alunos == 'minialunos')
<span style='color:rgb(255, 255, 255);'>Matrículas Abertas - Curso acontecerá!
@endif

@if($curso->alunos == 'maxalunos')
<span style='color:rgb(255, 255, 255);'>Matrículas Encerradas
@endif




<a href="/cursos/join/{{$curso->id}}"><br/>inscreva-se</a>
<p><span style='color:rgb(255, 255, 255);'>Numero de alunos: {{count($curso->users)}}</p>
<p><span style='color:rgb(255, 255, 255);'>Nome dos alunos:</p>
@foreach($curso->users as $roventiniotario)
<p><span style='color:rgb(255, 255, 255);'>{{$roventiniotario->name}}</p>
@endforeach


@endsection