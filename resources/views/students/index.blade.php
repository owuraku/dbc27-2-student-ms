@extends('layouts.main')

@section('content')
<div class="container">
    <h1>List of Students</h1>
    <a href="{{route('student.add-form')}}" class="btn btn-lg btn-primary">Add</a>
 <table class="table">
        <thead>
            <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Student Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Course</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <th scope="row">{{$student->studentId}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->course->name}} ({{$student->course->courseCode}}) </td>
                <td>
                    <button class="btn btn-success">View</button>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-primary">Edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
