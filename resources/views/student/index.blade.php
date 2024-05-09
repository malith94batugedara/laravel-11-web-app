@extends('layouts.app')

@section('title','SMS | All Students')

@section('content')

     <div class="container">

           <h1>All Students<a href="{{ route('student.create') }}" class="btn btn-primary float-end">Add New Student</a></h1><br/>
           @if(session('status'))
           <div class="alert alert-success">
                 {{ session('status') }}
           </div>
           @endif
             <table class="table table-dark table-bordered">
                  <thead>
                       <tr>
                         <th>Stu Name</th>
                         <th>Stu Age</th>
                         <th>Action</th>
                       </tr>
                  </thead>
                  <tbody>
                     @foreach ($students as $student)
                        <tr>
                         <td>{{$student->stu_name}}</td>
                         <td>{{$student->stu_age}}</td>
                         <td>
                             <a href="{{ route('student.edit',$student->id) }}" class="btn btn-success">Edit</a>
                             <a href="{{ route('student.delete',$student->id) }}" class="btn btn-danger">Delete</a>
                         </td>
                        </tr>
                     @endforeach
                  </tbody>
             </table>
     </div>

@endsection
