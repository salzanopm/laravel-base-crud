@extends('layouts.app')

@section('main_content')
    <h1>Lista dei fumetti</h1>
    @foreach ($comics as $comic)
        <div>
            <h2>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->title }}</a>
            </h2>
        </div>
    @endforeach
@endsection