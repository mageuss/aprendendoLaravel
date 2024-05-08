@extends('layouts.main')

@section('title', 'Segunda página')

@section('content')

    {{-- <h1>Sou a Segunda pagina criada, eba!</h1> --}}
    <h2>Tela de Busca</h2>
    @if ($busca != '')
        <p>o usuário está buscando por: {{ $busca }}</p>
    @endif
    <a href="..">voltar</a>

@endsection
