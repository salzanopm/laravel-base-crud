@extends('layouts.app')

@section('main_content')
    <div class="card">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
          <h5 class="card-title">{{ $comic->title }}</h5>
          <div>Prezzo: {{ $comic->price }}€</div>
          <div>Data di uscita: {{ $comic->sale_date }}</div>
          <div>Serie: {{ $comic->series }}</div>
          <div>tipo: {{ $comic->type }}</div>
          <p class="card-text">{{ $comic->description }}</p>
        </div>
    </div>
@endsection