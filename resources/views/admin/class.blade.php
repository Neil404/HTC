@extends('layouts.app')
@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            + Add Class
        </button>
        @include('admin.class.create')
        @include('admin.class.table')
    </div>
@endsection
