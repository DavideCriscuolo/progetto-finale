@props(["game"])

<div class="card mb-3 h-100"  >
    <div class="row g-0">
        <div class="col-md-4">
            <img
                src="Image Source"
                class="img-fluid rounded-start"
                alt="Card title"
            />
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $game->title }}</h5>
                <p class="card-text">
                   {{ $game->plot }}
                </p>
                <p class="card-text">
                    {{ $game->classification }}
                    
                </p>
            </div>
        </div>
    </div>
    <div> 
            <div class="my-2">

            <span class="badge bg-primary "> {{ $game->category->name }}</span>
        </div>
    <a href="{{ route("game.index") }}">Torna ai Giochi</a>
      
    <x-modal-delete :game="$game"></x-modal-delete>
    </div>
</div>