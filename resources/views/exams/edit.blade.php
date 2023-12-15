@extends('exams.layout')
@section('content')

<div class="card">
    <div class="card-header">Exam Page</div>
    <div class="card-body">
        <form action="{{ url('exam/' . $exams->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" value="{{ $exams->id }}" />
            
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $exams->name }}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control">{{ $exams->description }}</textarea>
            </div>
            
            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</div>

@stop
