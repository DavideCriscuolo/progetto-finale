@extends('layouts.app')

@section('content')
<div class=" my-5">
    <div><h1>Modifica la categoria {{ $category->name }}</h1></div>


    <div class="my-5">

        <form action="{{ route("category.update",$category->id) }}" method="POST">

    @csrf
    @method("PUT")
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id="name"
            aria-describedby="helpId"
            placeholder="Modifica il nome della categoria"
        />
      
    </div>
    
    <button class="btn btn-success" type="submit">Crea</button>
        </form>
    </div>
</div>
@endsection
