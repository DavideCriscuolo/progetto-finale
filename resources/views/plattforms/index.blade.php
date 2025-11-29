@extends('layouts.app')

@section('content')
<div class="container">
   <div>
      <h1 class="my-2 text-center">Tutte le piattaforme</h1>
   </div>
   <div class="my-3">
      <a class="btn btn-primary" href="{{ route("plattform.create") }}">Inserisci una nuova piattaforma</a>
   </div>
   <ul class="list-group">
@foreach ($plattforms as $plattform )

<li class="list-group-item d-flex justify-content-between ">{{ $plattform->name }}
   
   
   <div><a class="btn btn-warning" href="{{ route("plattform.edit", $plattform->id) }}">Modifica</a>   </div>


      <x-modal-delete>
           <x-slot:id>{{ $plattform->id }}</x-slot:id>
               <x-slot:title> la categoria {{ $plattform->name }}</x-slot:title>
                <x-slot:route>{{ route("plattform.destroy",$plattform->id)}}</x-slot:route>
       </x-modal-delete>
 
</li>
@endforeach
</ul>
   </div>
</div>
@endsection
