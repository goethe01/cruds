@extends('layouts.app')

@section('content')
    <a href="{{Route('note.index')}}">Indice</a>
    <form method="POST" action="{{route('note.store')}}">
        @csrf
        <label >Title:</label>
        <input type="text" name="tatle"> <br>
        @error('tatle')
            <p style="color: red;">{{ $message }}</p>
        @enderror
            


        <label>Description:</label>
        <input type="text" name="description">
        @error('description')
            <p style="color: red;"> {{ $message}}</p>
        @enderror

        <input type="submit" value="Create"/>
    </form>
@endsection