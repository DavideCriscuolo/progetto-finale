@extends('layouts.app')

@section('content')


<div>
 
<div>

   <div>
      <h1 class="my-2 text-center">Tutte le categorie</h1>
   </div>
   <div class="my-3">
   
   </div>
   <ul class="list-group">
@foreach ($categories as $category )

<li class="list-group-item d-flex justify-content-between ">{{ $category->name }}
   
   
   <div class=""><a class="btn btn-warning" href="{{ route("category.edit", $category->id) }}">Modifica</a>  
      <x-modal-delete>
        <x-slot:id>{{ $category->id }}</x-slot:id>
            <x-slot:title> la categoria {{ $category->name }}</x-slot:title>
               <x-slot:route>{{ route("category.destroy",$category->id)}}</x-slot:route>
    </x-modal-delete>
   </div>


 
</li>
@endforeach
</ul>
   </div>
</div>





  

@endsection
