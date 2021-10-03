@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-2 p-3 d-flex align-items-center">
            <p class="font-weight-bold mb-0">FIRST GRADING</p>
        </div>
        <div class="col-xs-12 col-md-5 p-3">
            <div class="row">
                <div class="col-md-2 col-sm-12 d-flex align-items-center">
                    <b>School Year:</b>
                </div>
                <div class="col-md-9 col-sm-12">
                    <select type="button" class="form-control pt-0 rounded-1 pb-0" name="gender" id="gender">
                        <option value="2021-2022">2021-2022</option>
                    </select>
                </div>
            </div>
        </div>
        {{-- <div class="col-xs-12 col-md-4 p-3">
            <form class="form-inline w-100">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div> --}}
    </div>
    <div class="w-25">
        @include('admin.grades.table')
    </div>
@endsection
