@extends('layouts.main')

@section('title', 'aprendendoLavarel')
    
@section('content')
    

<h1> Hello World </h1>
<a href="/segundo">segunda pagina</a>

@if ($nome == 'Mateus')
    <p>o {{ $nome }} tem {{ $idade }} anos</p>
@else
    <p>oii</p>
@endif

{{-- @for ($i = 0; $i < count($array); $i++)
    @if ($array[$i] % 2 == 0)
        <p> O numero {{ $array[$i] }} é par </p>
    @endif
    <p>{{ $array[$i] }}</p>
@endfor --}}

{{-- tem como criar blocos de php no blade --}}
{{-- @php
    $nomes = ['lucas', 'mateus', 'joão', 'luis'];
@endphp
@foreach ($nomes as $item)
    {{ $item }},
@endforeach --}}
<!--comentario em html aparece no inspecionar elemento, os outros não-->
{{-- assim q faz comentário no blade --}}
{{-- @endsection --}}
@endsection
