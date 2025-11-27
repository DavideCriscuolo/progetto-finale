
@props(["game"])
<div class="card h-100">
    {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title" /> --}}
    <div class="card-body">
        <div>
            <h4 class="card-title">{{ $game->title }}</h4>

        </div>
        <div>

            <p class="card-text">{{ $game->plot }}</p>
        </div>
        <div class="my-2">

            <span class="badge bg-primary "> {{ $game->category->name }}</span>
        </div>
        <div>

            <a  class="btn btn-primary" href="{{ route("game.show",$game->id) }}">Scopri</a>
             <a class="btn btn-warning" href="{{ route("game.edit",$game->id) }}">Modifica</a>
             
        </div>
      
    </div>
</div>
