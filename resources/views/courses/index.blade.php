@extends('layouts.main')

@section('content')
<div class="container">
    <h1>List Of Courses</h1>
    <a href="{{route('course.add-form')}}"  class="btn btn-lg btn-primary">Add</a>
 <table class="table">
        <thead>
            <tr>
                <th scope="col">Course Name</th>
                <th scope="col">Course Code</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr >
                <th scope="row">{{$course->name}}</th>
                <td>{{$course->courseCode}}</td>
                <td>{{$course->description}}</td>
                <td>
                    @if(Auth::user()->userType == 'admin')
                    <a href="{{route('course.show', ['id' => $course->id])}}" class="btn btn-success">View</a>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-primary">Edit</button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

