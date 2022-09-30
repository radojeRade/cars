@extends('layouts.master')

@section('title', $car->title)
@section('producer', "'This is $car->producer producer' ")

@section('content')
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">{{$car->producer}}</p>
                  <p class="card-text">{{$car->title}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      
                      <a href="{{ route('cars') }}" class="btn btn-sm btn-outline-secondary"> Back to cars</a>
                      
                    </div>
                    <small class="text-muted">{{$car->number_of_doors}}</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection              
    