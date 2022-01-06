@extends('layouts.app')

<!-- This view shows a previously selected movie individually, along with all of it's info -->

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Movie: {{ $movie->title }}
                </div>

                <div class="card-body">
                    
                      <table id="table-movies" class="table table-hover">
                          <tbody>
                              <tr>
                          <thead>
                              <td>Title</td>
                              <td>{{ $movie->title }}</td>
</tr>
<tr>
                          <thead>
                              <td>Genre</td>
                              <td>{{ $movie->genre }}</td>
</tr>
<tr>
                          <thead>
                              <td>Release Year</td>
                              <td>{{ $movie->release_year }}</td>
</tr>
<tr>
                          <thead>
                              <td>Description</td>
                              <td>{{ $movie->description }}</td>
</tr>
<tr>
                          <thead>
                              <td>Director</td>
                              <td>{{ $movie->director }}</td>
</tr>
<tr>
                          <thead>
                              <td>Age Rating</td>
                              <td>{{ $movie->age_rating }}</td>
</tr>
<tr>
                          <thead>
                              <td>Run Time</td>
                              <td>{{ $movie->run_time }}</td>
</tr>
<tr>
                  

                    
<tbody>
</table>
    
            <a href="{{ route('user.movies.index') }}" class="btn btn-default">Back</a>

</div>
</div>
</div>
</div>  
          </div>
          @endsection