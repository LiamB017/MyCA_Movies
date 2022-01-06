@extends('layouts.app')

<!-- This page let's the user know they are an ordinary user and allows them to view movies by
clicking View All Movies, the user.movies.index route is used. -->

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

        You are logged in as an ordinary user! <a href="{{route('user.movies.index')}}"> View All Movies</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
