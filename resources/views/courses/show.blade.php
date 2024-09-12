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
  <div class="card-header">Course Page:-</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Course-Name : {{ $courses->name }}</h5>
        <p class="card-text">Syllabus : {{ $courses->syllabus }}</p>
        <p class="card-text">Duration : {{ $courses->duration() }}</p>
  </div>
       
    </hr>
  
  </div>

  @endsection