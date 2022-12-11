@extends('layouts.app')

@section('content')
<p><span style='color:rgb(255, 255, 255);'>Nome do usuario: {{ $user->name }}</p>
<p><span style='color:rgb(255, 255, 255);'>Nickname:{{ $user->username }}</p>
<p><span style='color:rgb(255, 255, 255);'>e-mail: {{ $user->email }}</p>
<p><span style='color:rgb(255, 255, 255);'>CPF: {{ $user->CPF }}</p>
<p><span style='color:rgb(255, 255, 255);'>Filme favorito: {{ $user->filme }}</p>
<p><span style='color:rgb(255, 255, 255);'>Endereço: {{ $user->endereço }}</p>
<p><span style='color:rgb(255, 255, 255);'>{{ $user->created_at }}</p>
<p><span style='color:rgb(255, 255, 255);'>{{ $user->updated_at }}</p>

@if($user->permissions == 1)
Aluno
@endif
@if($user->permissions == 2)
Professor
@endif
@if($user->permissions == 3)
Secretaria
@endif
@endsection