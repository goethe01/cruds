@extends('layouts.app')

@section('content')
<a href="{{route('note.index')}}">regresar</a>
    <h1>{{ $note->tatle}}</h1>
    <p>{{$note->description}}</p>
@endsection