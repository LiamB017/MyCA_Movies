@extends('layouts.app')

<!-- This page displays all movies from the database, 
each movie can be viewed individually, edited or deleted -->

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
           
                <div class="card-header">Movies
                  <!-- add button links to the create route -->
                <a href="{{ route('admin.movies.create') }}"  class= "btn btn-primary float-right">Add</a>
                </div>

                <div class="card-body">
                    @if (count($movies)=== 0)
                    <p>There are no Movies </p>
                    @else
                      <table id="table-movies" class="table table-hover">
                          <thead>
                              <th>Title</th>
                              <th>Genre</th>
                              <th>Release </th>
                              <th>Description</th>
                              <th>Director</th>
                              <th>Age Rating</th>
                              <th>Run Time</th>
                              <th></th>
</thead>
<tbody>
    @foreach ($movies as $movie)
    <tr data-id="{{ $movie->id }}">
        <td>{{ $movie->title}}</td>
        <td>{{ $movie->genre}}</td>
        <td>{{ $movie->release_year}}</td>
        <td>{{ $movie->description}}</td>
        <td>{{ $movie->director}}</td>
        <td>{{ $movie->age_rating}}</td>
        <td>{{ $movie->run_time}}</td>

        <td>
            <!-- links routes to admin functionality views, movie id's are passed in -->
        <a href="{{ route('admin.movies.show', $movie->id) }}" class="btn btn-primary">View</a>
        <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-warning">Edit</a>
   <form style="display:inline-" method="POST" action="{{ route('admin.movies.destroy', $movie->id) }}">
   <input type="hidden" name="_method" value="DELETE">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button type="submit" class="form-control btn btn-danger">Delete</a>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endif
</div>
</div>
</div>
</div>
</div>
@endsection


              