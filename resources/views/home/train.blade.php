@extends('layouts.main')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            @forelse ($trains as $train)
              <div class="col-2 m-3 pt-5 pb-5 text-white">
                <img src="{{ $train->post}}" alt="{{ $train->agency }}" class="img-fluid">
                <h3>Agenzia: {{ $train->agency }}</h3>
                <h4>Stazione di partenza: {{ $train->departure_station }}</h4>
                <h5>Stazione di arrivo: {{ $train->arrival_station }}</h5>
                <h5>Orario di partenza: {{ $train->departure_time }}</h5>
                <h5>Orario di arrivo: {{ $train->arrival_time }}</h5>
                <h6>Codice treno: {{ $train->code_train }}</h6>
                <h6>Numero carrozze: {{ $train->number_carriages }}</h6>
              </div>
            @empty
              <div class="col-12">
                <h1>Non ci sono treni in partenza</h1>
              </div>
            @endforelse
        </div>
    </div>
@endsection
