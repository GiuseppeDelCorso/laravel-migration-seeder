@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            @foreach ($train as $trains)
                <div class="col-4">
                    <h3 class="py-2 fs-1">{{$trains->agency}}</h3>
                    <p>Il Treno Parte dalla stazione di 
                        <span class="red">{{$trains->departure_station}}</span> 
                    </p>
                    <p>Il Treno Arriva dalla stazione di
                         <span class="red">{{$trains->arrival_station}}</span> 
                    </p>
                    <p>Il Treno parte alle ore 
                        <span class="red">{{$trains->departure_time}}</span>
                    </p>
                    <p>Treno numero 
                        <span class="red">{{$trains->train_code}}</span> 
                    </p>
                    <p>Carrozza numero
                         <span class="red"> {{$trains->carriage_number}}</span>
                    </p>
                    <p>Il Treno e in orario
                         <span class="red"> {{$trains->in_time}}</span> 
                    </p>
                    <p>Treno Cancellato 
                        <span class="red">{{$trains->train_cancelled}}</span> 
                    </p>
                  
                </div>
            @endforeach
        </div>
    </div>
@endsection