
@props(["game"])
<div class="card h-100">
    {{-- <img class="card-img-top" src="holder.js/100x180/" alt="Title" /> --}}
    <div class="card-body">
        <h4 class="card-title">{{ $game->title }}</h4>
        <p class="card-text">{{ $game->plot }}</p>
        <a href="{{ route("game.show",$game->id) }}">Scopri</a>
    </div>
</div>
