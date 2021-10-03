@extends('layouts.app')
@section('content')
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    + New Account
  </button>
  @include('admin.accounts.create')
  @include('admin.accounts.table')
@endsection
