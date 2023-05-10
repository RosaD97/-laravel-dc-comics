@extends('layout.app')

@section('title')
<h1 class="container text-center my-4 text-light">{{$comics->title}}</h1>
@endsection

@section('page.main')
<div class="ms_create container">
    <div>Description:</div>
    <p class="card-text">{{ $comics->description }}</p>
    <div>Type:</div>
    <div>{{ $comics->type }}</div>
    <div class="mt-3">sale_date</div>
    <div>{{ $comics->sale_date }}</div>


    <a href="{{ route('comics.index')}}" class="btn my_btn btn-light mt-3">Back</a>

</div>

@endsection