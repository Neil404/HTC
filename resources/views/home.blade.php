@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <!-- {{Auth::user()}} -->
                    @if (Auth::user()->type == 'ADMIN')
                        {{__('YOU ARE LOGGED IN AS ADMIN')}}
                    @elseif(Auth::user()->type == 'TEACHER')
                    {{__('YOU ARE LOGGED IN AS TEACHER')}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
