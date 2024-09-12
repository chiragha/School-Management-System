@extends('layout')
@section('content')

<style>
    .card{
        background-color:#19172e;
        border:2px solid #fff;
        color:#fff;
    }
    .card-header{
        font-size:1.5em;

    }
    .card-body{
        border:2px solid #fff;
    }
</style>
 
<div class="card">
  <div class="card-header">Teachers Page:-</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $teachers->name }}</h5>
        <p class="card-text">Address : {{ $teachers->address }}</p>
        <p class="card-text">Mobile : {{ $teachers->mobile }}</p>
  </div>
       
    </hr>
  
  </div>

  @endsection