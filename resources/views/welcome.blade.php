@extends('layouts.app')


@section('content')

<div class="container">
    <h1 class="py-4">ciao a tutti i treni</h1>

    <div class="grid-train">
        @foreach ($trains as $train)

        <div class="card-train">
            <h3 class="text-center">
                {{ $train->Azienda }}
            </h3>
            <div class="row-stasion">
                <p class="py-3 m-0">{{ $train['stazione di arrivo'] }}</p>
                <i class="fa-solid fa-right-left"></i>
                <p class="py-3 m-0">{{ $train['stazione di partenza'] }}</p>
            </div>
            <div class="row-hour">
                <p class="py-3 m-0">{{ $train['orario di partenza'] }}</p>
                <i class="fa-solid fa-right-left"></i>
                <p class="py-3 m-0"> {{ $train['orario di arrivo'] }}</p>
            </div>
        </div>
        @endforeach

    </div>

</div>

<style>
    .grid-train {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .card-train {
        border: 3px solid red;
        padding: 15px;
        border-radius: 8px;
        background-color: white;
        opacity: 0.9;
    }

    .row-stasion,
    .row-hour {
        display: flex;
        justify-content: space-between;
        flex-wrap: nowrap;
        align-items: center;
    }

    main,
    body {
        height: 100vh;
        width: 100vw;
    }

    main {
        background-image: url('https://th.bing.com/th/id/OIP.27wpmy2VwH4DKsgmzRwFcAHaEc?pid=ImgDet&rs=1');
        background-size: cover;
        background-repeat: no-repeat;
        object-fit: cover;
        background-position: center;
    }
</style>

@endsection