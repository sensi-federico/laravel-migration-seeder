@extends('layouts.app')



@section('content')


<h1 class="text-center py-4">Trains</h1>

<div class="container">
    <div class="row row-cols-5">
        @forelse($trains as $train)
        <div class="col">
            <div class="card">
                <div class="card-header">{{$train->stazione_di_partenza}}</div>
                <div class="card-body">
                    <h3>{{$train->stazione_di_arrivo}}</h3>
                    <p>{{$train->orario_di_partenza}}</p>
                    <p>{{$train->orario_di_arrivo}}</p>
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