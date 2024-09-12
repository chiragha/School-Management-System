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
  <div class="card-header">Batch Page:-</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Batch-Name : {{ $batches->name }}</h5>
        <p class="card-text">Course-Name : {{ $batches->course->name }}</p>
        <p class="card-text">Start-Date : {{ $batches->start_date }}</p>
  </div>
       
    </hr>
  
  </div>

  @endsection