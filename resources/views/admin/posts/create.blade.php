@extends('layouts.app')

@section('content')

  <form action="{{route('admin.posts.store')}}" method="POST">
    {{-- genero token --}}
    @csrf
    
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" >
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea type="password" class="form-control" id="description" name="description" rows="5"></textarea>
    </div>
    <a href="{{route('admin.posts.index')}}" class="btn btn-outline-dark"><i class="fas fa-arrow-left me-2"></i> Torna indietro</a>
    <button type="submit" class="btn btn-primary">Salva</button>
  </form>

@endsection