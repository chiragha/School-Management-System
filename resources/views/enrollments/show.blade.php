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
  <div class="card-header">Enrollment Page:-</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrollment : {{ $enrollments->enroll_no }}</h5>
        <p class="card-text">Batch_ID : {{ $enrollments->batch_id }}</p>
        <p class="card-text">Student-ID : {{ $enrollments->student_id }}</p>
        <p class="card-text">Join-Date : {{ $enrollments->join_date }}</p>
        <p class="card-text">Fee : {{ $enrollments->fee }}</p>
  </div>
       
    </hr>
  
  </div>

  @endsection