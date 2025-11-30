@extends('layouts.app')

@section('content')
<div class=" row">

    <div class="col col-3 ">
        <x-sidebar></x-sidebar>
    </div>
    <div class="col col-9">

        <div class="my-3">
        
            <x-card-show :game="$game"></x-card-show>
            
        </div>
    </div>
</div>
@endsection
