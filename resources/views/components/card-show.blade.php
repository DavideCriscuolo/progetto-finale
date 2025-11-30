@props(["game"])

<div class="card mb-3 h-100"  >
    <div class="row g-0">
        <div class="col-md-4">
                            @foreach ($game->medias as $media )


<x-slider>
    <x-slot:url> {{  $media->url }} </x-slot:url>
   </x-slider>


          @endforeach
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
          @foreach ($game->plattforms as $plattform )
       <span class="badge bg-warning "> {{ $plattform->name }}</span>
          @endforeach
        </div>

        </div>
        <div >
            <div>
      
                <x-modal-delete>
                    <x-slot:id>{{ $game->id }}</x-slot:id>
                        <x-slot:title>{{ $game->title }}</x-slot:title>
                           <x-slot:route>{{ route("game.destroy",$game->id)}}</x-slot:route>
                </x-modal-delete>
            </div>
      

         
            <div class="my-2"><a class="btn btn-primary" href="{{ route("game.index") }}">Torna ai Giochi</a> </div>  
        </div>
    </div>
</div>