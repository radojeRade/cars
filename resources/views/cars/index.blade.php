@extends('layouts.master')

@section('title', 'Car')  
@section('producer', 'This is Car Album')

@section('content')
    @foreach($cars as $car)
        <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">{{$car->title}}</p>
                  <p class="card-text">{{$car->producer}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                       <a href="{{ route('single-car', [ 'id'=> $car->id]) }}" class="btn btn-sm btn-outline-secondary"> {{$car->title}}</a>
                    </div>
                    <small class="text-muted">Broj vrata: {{$car->number_of_doors}}</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        

@endsection

