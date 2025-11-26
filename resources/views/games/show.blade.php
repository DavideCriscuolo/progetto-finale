@extends('layouts.app')

@section('content')
<div class="container-fluid ">
<div class="my-3">

    <x-card-show :game="$game"></x-card-show>
    
</div>
</div>
@endsection
