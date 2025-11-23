@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row row-cols-3">
@foreach ($games as $game )

<div class="col my-2">
<x-card-index :game="$game"></x-card-index>
</div>
@endforeach
   </div>
</div>
@endsection
