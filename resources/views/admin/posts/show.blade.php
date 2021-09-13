@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    {{$post->title}}
  </div>
  <div class="card-body">
    <p class="card-text">{{$post->description}}</p>
    <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Torna indietro</a>
  </div>
</div>
@endsection