@extends('layouts.main')

@section('title', 'home')

@section('content')
<div class="container my-5">
    <ul>
         @foreach ($trains as $train)
         <li>{{$train->Azienda}}</li>
         @endforeach
        
    </ul>
   
</div>
@endsection

