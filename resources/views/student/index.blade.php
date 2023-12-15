@extends('exams.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Exams</div>
                    <div class="card-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Available</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($exams as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->isChoosed?'no':'yes' }}</td>
 
                                        <td>
                                            @if(!$item->isChoosed)
                                            <form action="{{ url('student/' .$item->id) }}" method="post">
                                                {!! csrf_field() !!}
                                                @method("PATCH")
                                                    <input type="hidden" name="id" id="id" value="{{$item->id}}" id="id" />
                                                    <input type="hidden"  name="name" id="name" value="{{$item->name}}" class="form-control">
                                                    <input type="hidden"  name="description" id="name" value="{{$item->description}}" class="form-control">
                                                    <input type="hidden"  name="isChoosed" id="name" value="1" class="form-control">
                                                    <button type="submit" class="btn btn-primary btn-sm" title="Choose Exam" > Choose</button>
                                                </form>
                                                @else
                                                @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection