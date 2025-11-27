@extends('layouts.app')

@section('content')
<div class="container">
   <div>
      <h1 class="my-2 text-center">Tutte le Piattaforme</h1>
   </div>
   <div class="my-3">
      <a class="btn btn-primary" href="{{ route("plattform.create") }}">Inserisci una nuova piattaforma</a>
   </div>
   <ul class="list-group">
@foreach ($plattforms as $plattform )

<li class="list-group-item d-flex justify-content-between">{{ $plattform->name }} </li>

@endforeach
</ul>
   </div>
</div>
@endsection
