@extends('layouts.app')

@section('content')
<p>{{ $user->name }}</p>
<p>{{ $user->username }}</p>
<p>{{ $user->email }}</p>
<p>{{ $user->CPF }}</p>
<p>{{ $user->filme }}</p>
<p>{{ $user->endereço }}</p>
<p>{{ $user->created_at }}</p>
<p>{{ $user->updated_at }}</p>

@if($user->permissions == 2)
Aluno
@endif
@if($user->permissions == 3)
Professor
@endif
@if($user->permissions == 1)
Secretaria
@endif
@endsection