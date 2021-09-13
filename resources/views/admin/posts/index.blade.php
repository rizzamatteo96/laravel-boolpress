@extends('layouts.app')

@section('content')
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
            <a href="#" class="btn btn-primary">Dettagli</a>
            <a href="#" class="btn btn-warning">Edit</a>
            <form action="#" class="d-inline-block">
              <button class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>
@endsection