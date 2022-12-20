@extends('layouts.app')



@section('content')


<h1 class="text-center py-4">Trains</h1>

<div class="container">
    <div class="row row-cols-5">
        @forelse($trains as $train)
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3>{{$train->azienda}}</h3>
                </div>
                <div class="card-body">
                    <h5 class="text-muted m-0">Stazione di partenza:</h5>
                    <h6>{{$train->stazione_di_partenza}}</h6>
                    <h5 class="text-muted pt-2 m-0">Stazione di arrivo:</h5>
                    <h6>{{$train->stazione_di_arrivo}}</h6>
                    <h5 class="text-muted">Partenza: <br>{{$train->orario_di_partenza}}</h5>
                    <h5 class="text-muted">Arrivo previsto: <br>{{$train->orario_di_arrivo}}</h5>
                </div>
            </div>
        </div>

        @empty

        <div class="col-12">
            <p>Sorry No trains yet!</p>
        </div>
        @endforelse
    </div>
</div>

@endsection