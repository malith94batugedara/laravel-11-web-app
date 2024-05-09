@extends('layouts.app')

@section('title','SMS | Add New Student')

@section('content')

     <div class="container">

           <h1>Add New Student<a href="{{ route('student.index')}}" class="btn btn-primary float-end">All Students</a></h1><br/>
           <div>
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                  <div> {{ $error }} </div>
                @endforeach
            </div>
            @endif
           </div>
           <form action="{{ route('student.store') }}" method="post">
             @csrf
                
             <label>Student Name</label>
             <input type="text" name="Student-Name" class="form-control" placeholder="Enter Student Name"/><br/>
             <label>Student Age</label>
             <input type="text" name="Student-Age" class="form-control" placeholder="Enter Student Age"/><br/>
             <input type="submit" value="Save" class="btn btn-success"/>
             <input type="reset" value="Reset" class="btn btn-warning"/>
           </form>

     </div>

@endsection
