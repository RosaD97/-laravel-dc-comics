@extends('layout.app')

@section('title')
<h1>Inserisci un nuovo comic</h1>
@endsection

@section('page.main')
<div>
    <a href="{{ route('comics.index')}}" class="btn btn-primary">torna</a>
</div>
<div>
    <form action="{{ route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">Img</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="number" class="form-control" id="price" name="price">
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series">
          </div>
          <div class="mb-3">
            <label for="sale_date" class="form-label">sale date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" id="type" name="type">
          </div>
          <div class="mb-3">
            <label for="artists" class="form-label">artists</label>
            <input type="text" class="form-control" id="artists" name="artists">
          </div>
          <div class="mb-3">
            <label for="writers" class="form-label">writers</label>
            <input type="text" class="form-control" id="writers" name="writers">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection