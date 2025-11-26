@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{ route("game.store") }}" method="POST">
@csrf


      <div class="mb-3">
          <label for="title" class="form-label">Titolo del Gioco</label>
          <input
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
              type="number"
              class="form-control"
              name="price"
              id="price"
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
    <input class="form-check-input" type="checkbox" name="plattforms[]" value="{{ $plattform->id }}" id="{{ $plattform->id }}" />
    <label class="form-check-label" for="{{ $plattform->id }}"> {{ $plattform->name }} </label>
</div>


@endforeach





      <div class="mb-3">
        <label for="plot" class="form-label">Trama</label>
        <textarea class="form-control" name="plot" id="plot" rows="3"></textarea>
      </div>
      
      <div class="mb-3">
        <label for="" class="form-label">Data d'Uscita</label>
        <input
            type="date"
            class="form-control"
            name="date"
            id="date"
            aria-describedby="helpId"
            placeholder=""
        />
      </div>
      



      
      <button type="submit" class="btn btn-success">Inserisci</button>
  </form>





</div>
@endsection
