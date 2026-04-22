@extends('layouts.app')

@section('content')
    <a href="{{route('note.create')}}">Create new note</a>
    <ul>
        @forelse ($notes as $note)
            <li><a href="{{route('note.show',$note->id)}}">{{$note -> tatle}}</a> |
                <a href="{{route('note.edit', ['note' => $note -> id])}}">Edit</a> |
                <form method="POST" action="{{route('note.destroy', $note -> id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" value="DELETE">Delete</button>
                </form>
        @empty
            <p>NO data.</p>
        @endforelse
    </ul>
@endsection