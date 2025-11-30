<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex align-items-center gap-2 p-4">
      <i class="bi bi-person-circle"></i><h5 class="m-0">{{Auth::user()->name}}</h5> 
      </div>
      <button class="accordion-button collapsed rounded " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
       Giochi
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body my-2">
           <div>
        <a class="text-decoration-none text-black" href="{{ route("game.index") }}">Tutti i giochi</a>
        </div>
        <div>
        <a class="text-decoration-none text-black" href="{{ route("game.create") }}">Inserisci un Nuovo Gioco</a>
        </div>
   
      </div>
   
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
     Categorie
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body my-2">
        
        <div class="my-2">
          <a class="text-decoration-none text-black" href="{{ route("category.index") }}">Tutte le categorie</a>
          </div>
        <div >

          <a class="text-decoration-none text-black" href="{{ route("category.create") }}">Inserisci una nuova categoria</a>
        </div>
      </div>
      
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
    Piattaforme
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> <a class="text-decoration-none text-black" href="{{ route("plattform.index") }}">Tutte le piattaforme</a>
        <div class="my-2"><a class="text-decoration-none text-black" href="{{ route("plattform.create") }}">Inserisci una nuova piattaforma</a></div>
      </div>
    </div>
  </div>
</div>