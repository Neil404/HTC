@extends('layouts.app')
@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            + Add School Year
        </button>
        @include('admin.schoolYear.create')
        @include('admin.schoolYear.table')
    </div>
@endsection
