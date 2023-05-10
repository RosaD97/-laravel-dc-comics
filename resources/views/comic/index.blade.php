@extends('layout.app')

@section('titolo')
<h1>Comics</h1>
@endsection


@section('page.main')
<div class="container d-flex flex-wrap">
        @foreach ($comics as $comic)
            <div class="card" >
                <img src="..." class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title my-4">{{ $comic->title }}</h5>
                  <div>{{ $comic->price }}</div>
                  <div>{{ $comic->series }}</div>
                  <div>{{ $comic->type }}</div>

                  {{-- Rotta per la views show --}}
                  <a href="{{ route('comics.show', $comic->id )}}" class="btn btn-primary">Vedi dettagli</a>
                </div>
              </div>
        @endforeach
</div>
@endsection