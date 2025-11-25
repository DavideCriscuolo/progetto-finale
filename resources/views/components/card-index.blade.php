
@props(["game"])
<div class="card h-100">
    {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title" /> --}}
    <div class="card-body">
        <h4 class="card-title">{{ $game->title }}</h4>
        <p class="card-text">{{ $game->plot }}</p>
        <a  class="btn btn-primary" href="{{ route("game.show",$game->id) }}">Scopri</a>
         <a class="btn btn-warning" href="{{ route("game.edit",$game->id) }}">Modifica</a>
    </div>
</div>
