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
    <div class="mt-4">
      <a href="{{route('admin.posts.index')}}" class="btn btn-outline-dark"><i class="fas fa-arrow-left me-2"></i> Torna indietro</a>
      <button type="submit" class="btn btn-outline-primary"><i class="far fa-save me-2"></i> Salva le modifiche</button>
    </div>
  </form>
  <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" class="d-inline-block">
    {{-- Per ogni form bisogna inserire il token altrimenti il cambiamento non viene accettato dal sistema --}}
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Sei sicuro di voler cancellare l\'elemento?')"><i class="far fa-trash-alt me-2"></i>Delete</button>
  </form>
  @endsection