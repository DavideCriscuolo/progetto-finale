@extends('layouts.app')

@section('content')
<div class="row">

  <div class="col col-3 border-end">
    <x-sidebar></x-sidebar>
  </div>


   <div class="col col-9">
    <div class="text-center my-2"><h1>Tutti i Giochi</h1></div>
     <div class="row row-cols-3">
     @foreach ($games as $game )
     
     <div class="col my-2">
     <x-card-index :game="$game"></x-card-index>
     
     </div>
     @endforeach
      </div>

   </div>



  </div>
 
@endsection
