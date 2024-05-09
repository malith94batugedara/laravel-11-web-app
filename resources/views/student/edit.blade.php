@extends('layouts.app')

@section('title','SMS | Edit Student')

@section('content')

     <div class="container">

           <h1>Edit Student<a href="{{ route('student.index')}}" class="btn btn-primary float-end">All Students</a></h1><br/>
           <div>
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                  <div> {{ $error }} </div>
                @endforeach
            </div>
            @endif
           </div>
           <form action="{{ route('student.update',$student->id)}}" method="post">
             @csrf
                
             <label>Student Name</label>
             <input type="text" name="Student-Name" value="{{$student->stu_name}}" class="form-control" placeholder="Enter Student Name"/><br/>
             <label>Student Age</label>
             <input type="text" name="Student-Age" value="{{$student->stu_age}}" class="form-control" placeholder="Enter Student Age"/><br/>
             <input type="submit" value="Update" class="btn btn-success"/>
             <input type="reset" value="Reset" class="btn btn-warning"/>
           </form>

     </div>

@endsection
