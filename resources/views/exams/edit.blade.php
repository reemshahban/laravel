@extends('exams.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Exam Page</div>
  <div class="card-body">
      
      <form action="{{ url('exam/' .$exams->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$exams->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$exams->name}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop