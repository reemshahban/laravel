@extends('exams.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Exams Page</div>
  <div class="card-body">
      
      <form action="{{ url('exam') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop