@extends('layouts.app')
@section('content')
  <a href="/admin/student/add">
    <button type="button" class="btn btn-success">Add Student</button>
  </a>
  @include('admin.students.table')
@endsection
