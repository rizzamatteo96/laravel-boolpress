@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    {{$post->title}}
  </div>
  <div class="card-body">
    <p class="card-text">{{$post->description}}</p>
  </div>
</div>
<div class="d-flex justify-content-between my-4">
  <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Torna indietro</a>
  <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
  <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" class="d-inline-block">
    {{-- Per ogni form bisogna inserire il token altrimenti il cambiamento non viene accettato dal sistema --}}
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare l\'elemento?')">Delete</button>
  </form>
</div>
@endsection