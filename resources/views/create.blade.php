@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create form</h2>
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">
                Name
              <input type="input" id="name" name="name"/>
            </label>
          </div>
      <div class="form-check-inline">
        Skill
        <label class="form-check-label" for="check1">
          <input type="checkbox" class="form-check-input" id="php" name="skill[]" value="php">PHP
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label" for="check2">
          <input type="checkbox" class="form-check-input" id="css" name="skill[]" value="css">CSS
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input"  id="java" name="skill[]" value="java">Java
        </label>
      </div>
<br/>
      <div class="form-check-inline">
        Gender
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" value="male">Male
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" value="female">Female
        </label>
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>
  </div>
@endsection
