@extends('layout.app')

@section('title')
<h1>{{$comics->title}}</h1>
@endsection

@section('page.main')
<div>
    <p class="card-text">{{ $comics->description }}</p>
    <div>{{ $comics->artists }}</div>

    <a href="{{ route('comics.index')}}" class="btn btn-primary">torna</a>

</div>

@endsection