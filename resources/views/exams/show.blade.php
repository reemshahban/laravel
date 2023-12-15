@extends('exams.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Exam Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $exam->name }}</h5>
        <h5 class="card-title">Description : {{ $exam->description }}</h5>
        <h5 class="card-title">Available : {{ $exam->isChoosed?'no':'yes' }}</h5>

  </div>
       
    </hr>
  
  </div>
</div>