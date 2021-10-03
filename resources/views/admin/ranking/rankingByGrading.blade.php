@extends('layouts.app')
@section('content')
    <div class="d-flex align-items-center px-3"
        style="position: fixed !important; width: 100%; border: 1px solid black; margin-left: -1rem; margin-top: -1.5rem; height: 35px;">
        <b>RANKING - FIRST GRADING</b>
    </div>
    <div class="d-flex flex-column w-25 mt-4">
        <button type="button" class="btn btn-primary mt-1 mb-1">SECTION AND YEAR LEVEL</button>
        <button type="button" class="btn btn-primary mt-1 mb-1">SUBJECTS</button>
        <button type="button" class="btn btn-primary mt-1 mb-1">CLASS RANKING BY SUBJECTS</button>
    </div>
@endsection
