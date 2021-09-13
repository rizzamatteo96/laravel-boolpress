@extends('layouts.app')

@section('content')

  <div class="d-flex justify-content-end">
    <a href="{{route('admin.posts.create')}}" class="btn btn-secondary mb-5">Crea nuovo post</a>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>

      {{-- ciclo tutti gli elementi presenti ne DB --}}
      @foreach ($posts as $post)
        <tr>
          <th scope="row">{{$post->id}}</th>
          <td>{{$post->title}}</td>
          <td>
            <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Dettagli</a>
            <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
            <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" class="d-inline-block">
              @method('DELETE')
              <button class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>
@endsection