@extends('layouts.main')

@section('content')
<h1>Course Details</h1>

<ul class="list-group">
  <li class="list-group-item">Course Name : {{$course->name}} </li>
  <li class="list-group-item">Course Code: {{$course->courseCode}} </li>
  <li class="list-group-item">Description: {{$course->description}} </li>
</ul>

<hr>

<h3>Registered Students</h3>
<ul class="list-group">
    @forelse ($course->students as $student)
    <li class="list-group-item font-bold"> {{$student->name}} ({{$student->studentId}} )</li>
    @empty
    <li class="list-group-item"> No registered student</li>
    @endforelse
</ul>
@endsection
