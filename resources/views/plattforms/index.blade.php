@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">
   <div class="col col-3 my-3">
       <x-sidebar></x-sidebar>
   </div>
   <div class="col col-9">
        <div>
      <h1 class="my-2 text-center">Tutte le piattaforme</h1>
   </div>
   <div class="my-3">

   </div>
   <ul class="list-group">
@foreach ($plattforms as $plattform )

<li class="list-group-item d-flex justify-content-between ">{{ $plattform->name }}
   
   
   <div>
      
      <div><a class="btn btn-warning" href="{{ route("plattform.edit", $plattform->id) }}">Modifica</a> 
     <x-modal-delete>
           <x-slot:id>{{ $plattform->id }}</x-slot:id>
               <x-slot:title> la categoria {{ $plattform->name }}</x-slot:title>
                <x-slot:route>{{ route("plattform.destroy",$plattform->id)}}</x-slot:route>
       </x-modal-delete>
   </div>  
   
  
   
   </div>


 
 
</li>
@endforeach
</ul>
   </div>
</div>


 
   </div>
</div>
@endsection
