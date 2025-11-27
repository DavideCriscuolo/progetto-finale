@extends('layouts.app')

@section('content')
<div class="container">
   <div>
      <h1 class="my-2 text-center">Tutte le categorie</h1>
   </div>
   <div class="my-3">
      <a class="btn btn-primary" href="{{ route("category.create") }}">Inserisci una nuova categoria</a>
   </div>
   <ul class="list-group">
@foreach ($categories as $category )

<li class="list-group-item d-flex justify-content-between">{{ $category->name }} <a class="btn btn-warning" href="{{ route("category.edit", $category->id) }}">Modifica</a></li>

@endforeach
</ul>
   </div>
</div>
@endsection
