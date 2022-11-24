@extends('layouts.app')

@section('content')


@foreach ($cursos as $curso)
 <p>Curso: {{ $curso->name }} </p>
@endforeach


@endsection