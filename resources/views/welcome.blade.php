@extends('layouts.app')


@section('content')

<div class="container">
    <h1>ciao a tutti i treni</h1>
    @foreach ($trains as $train)
    <div class="grid">
        <div class="card-train">
            <h3>
                azienda
            </h3>
            <p>stazione di arrivo</p>
            <p>stazione di partenza</p>
            <p>orario di partenza</p>
            <p>orario di arrivo</p>
        </div>
    </div>

    @endforeach
</div>

<style>
    .grid {}
</style>

@endsection