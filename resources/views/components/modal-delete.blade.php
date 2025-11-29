
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $id }}">
 Elimina
</button>


<div class="modal fade" id="staticBackdrop{{$id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$id}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel{{$id}}">Sei sicuro di vole eliminare {{ $title }}?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <form action="{{ $route }}" method="POST">
            @csrf
            @method("DELETE")
<button type="submit" class="btn btn-danger">Si</button>


        </form>
      </div>
    </div>
  </div>
</div>