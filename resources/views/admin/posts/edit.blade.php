@extends('layouts.app')

@section('content')
  <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
    {{-- genero token --}}
    @csrf

    {{-- imposto il metodo per il form --}}
    @method('PUT')
    
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea type="password" class="form-control" id="description" name="description" rows="5">{{$post->description}}</textarea>
    </div>
    <div class="d-flex justify-content-between">
      <a href="{{route('admin.posts.index')}}" class="btn btn-secondary">Torna indietro</a>
      <button type="submit" class="btn btn-primary">Salva le modifiche</button>
      <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" class="d-inline-block">
        {{-- Per ogni form bisogna inserire il token altrimenti il cambiamento non viene accettato dal sistema --}}
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare l\'elemento?')">Delete</button>
      </form>
    </div>
  </form>
@endsection