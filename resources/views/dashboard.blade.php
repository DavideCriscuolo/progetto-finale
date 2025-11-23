@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header"><h2>Back Office Dashboard</h2></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div>

                        <h3>Ciao {{ $user->name}}</h3>
                    </div>
                    <div>
                        <p>Qui puoi gestire tutto il back-office.</p>
                    </div>
                    <div>
                        <a class="btn btn-danger" href="{{ route("game.index") }}">Tutti i giochi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
