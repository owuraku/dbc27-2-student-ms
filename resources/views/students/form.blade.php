@extends('layouts.main')

@section('content')
<form method="POST" action="{{route('student.create')}}">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
     @error('name')
            <span class="error">{{$message}}</span>
        @enderror
  </div>

   <div class="mb-3">
    <label for="studentId" class="form-label">Student ID</label>
    <input type="text" class="form-control" id="studentId" name="studentId">
     @error('studentId')
            <span class="error">{{$message}}</span>
        @enderror
  </div>

   <div class="mb-3">
    <label for="dob" class="form-label">Date of birth</label>
    <input type="date" class="form-control" id="dob" name="dob">
     @error('dob')
            <span class="error">{{$message}}</span>
        @enderror
  </div>

  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <select class="form-control" name="gender" id="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
     @error('gender')
            <span class="error">{{$message}}</span>
        @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
