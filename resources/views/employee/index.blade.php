@extends('layouts.app')

@section('content')
<div class="container">
    <h2>List form</h2>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Skill</th>
            <th scope="col">Gender</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($employees as $employee)
          <tr>
            <td>{{ $employee->id }}</td>
            <th scope="row">{{ $employee->name }}</th>
            <td>{{ $employee->skill }}</td>
            <td>{{ $employee->gender }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@endsection
