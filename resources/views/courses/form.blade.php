@extends('layouts.main')

@section('content')
<form method="POST" action="{{route('course.create')}}">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Course Name</label>
    <input type="text" class="form-control" id="name" name="name">
     @error('name')
            <span class="error">{{$message}}</span>
    @enderror
  </div>

   <div class="mb-3">
    <label for="courseCode" class="form-label">Course Code</label>
    <input type="text" class="form-control" id="courseCode" name="courseCode">
     @error('courseId')
            <span class="error">{{$message}}</span>
        @enderror
  </div>

   <div class="mb-3">
    <label for="dob" class="form-label">Description</label>
    <textarea class="form-control" name="description" rows="3"></textarea>
     @error('description')
            <span class="error">{{$message}}</span>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
