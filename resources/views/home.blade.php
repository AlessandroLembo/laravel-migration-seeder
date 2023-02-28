@extends('layouts.main')

@section('title', 'home')

@section('content')
<div class="container my-5">
    <div class="row">

         @foreach ($trains as $train)
         <div class="col-4 py-4">
          <div class="card">
            <ul class="py-3">
                <li class="list-group-item text-center"><strong>Azienda: </strong>{{$train->azienda}}</li>
                <li class="list-group-item text-center"><strong>Stazione di partenza: </strong>{{$train->stazione_di_partenza}}</li>
                <li class="list-group-item text-center"><strong>Stazione di arrivo: </strong>{{$train->stazione_di_arrivo}}</li>
                <li class="list-group-item text-center"><strong>Data: </strong>{{$train->data}}</li>
                <li class="list-group-item text-center"><strong>Orario di partenza: </strong>{{$train->orario_di_partenza}}</li>
                <li class="list-group-item text-center"><strong>Orario di arrivo: </strong>{{$train->orario_di_arrivo}}</li>
                <li class="list-group-item text-center"><strong>Codice treno: </strong>{{$train->codice_treno}}</li>
                <li class="list-group-item text-center"><strong>Numero_carrozze: </strong>{{$train->numero_carrozze}}</li>
                <li class="list-group-item text-center"><strong>In_orario: </strong>{{$train->in_orario === 1 ? 'si' : 'no'}}</li>
                <li class="list-group-item text-center"><strong>Cancellato: </strong>{{$train->cancellato === 0 ? 'no' : 'si'}}</li>
            </ul>
          </div>
        </div>
         @endforeach
        
    </div>
   
</div>
@endsection

