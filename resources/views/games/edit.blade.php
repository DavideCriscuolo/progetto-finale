@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{ route("game.update",$game->id) }}" method="POST">
@csrf
@method("PUT")

      <div class="mb-3">
          <label for="title" class="form-label">Titolo del Gioco</label>
          <input
value="{{ $game->title }}"
              type="text"
              class="form-control"
              name="title"
              id="title"
              aria-describedby="helpId"
              placeholder=""
          />
      </div>
          <div class="mb-3">
          <label for="editor" class="form-label">Casa Editrice</label>
          <input
value="{{ $game->editor }}"
              type="text"
              class="form-control"
              name="editor"
              id="editor"
              aria-describedby="helpId"
              placeholder=""
          />
      </div>
          <div class="mb-3">
          <label for="classification" class="form-label">Classificazione</label>
          <input
value="{{ $game->classification }}"
              type="text"
              class="form-control"
              name="classification"
              id="classification"
              aria-describedby="helpId"
              placeholder=""
          />
      </div>
          <div class="mb-3">
          <label for="price" class="form-label">Prezzo</label>
          <input
          value="{{ $game->price }}"
              type="number"
              class="form-control"
              name="price"
              id="price"
              aria-describedby="helpId"
              placeholder=""
          />
      </div>
      <div class="mb-3">
        
        <label for="plot" class="form-label">Trama</label>
        <textarea class="form-control" name="plot" id="plot" rows="3" placeholder="{{ $game->plot }}"         ></textarea>
      </div>
      
      <div class="mb-3">
        <label for="" class="form-label">Data d'Uscita</label>
        <input
        value="{{ $game->date
        
        
        }}"
            type="date"
            class="form-control"
            name="date"
            id="date"
            aria-describedby="helpId"
            placeholder=""
        />
      </div>
            <div class="mb-3">
          <label for="category_id" class="form-label">Categoria</label>
          <select
          class="form-select form-select-lg"
          name="category_id"
          id="category_id"
          >
          @foreach ($categories as $category )
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach

        
        
    </select>
</div>
@foreach ($plattforms as $plattform )
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="plattforms[]" value="{{ $plattform->id }}" id="{{ $plattform->id }}" {{ $game->plattforms->contains($plattform->id) ? "checked" :"" }} />
    <label class="form-check-label" for="{{ $plattform->id }}"> {{ $plattform->name }} </label>
</div>
@endforeach
      <button type="submit" class="btn btn-success">Modifica</button>
    
  </form>



<div class="my-2"> <a class="btn btn-primary" href="{{ route("game.index") }}">Torna a tutti i Giochi</a>
</div>
</div>
@endsection
