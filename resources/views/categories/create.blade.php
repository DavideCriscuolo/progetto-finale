@extends('layouts.app')

@section('content')
<div class=" my-5">
    <div><h1>Crea una nuova categoria</h1></div>


    <div class="my-5">

        <form action="{{ route("category.store") }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id="name"
            aria-describedby="helpId"
            placeholder="Inserisci il nome della nuova categoria"
        />
      
    </div>
    
    <button class="btn btn-success" type="submit">Crea</button>
        </form>
    </div>
    <div class=""><a class="btn btn-primary" href="{{ route("category.index") }}">Torna alle categorie</a> </div>  
</div>
@endsection
