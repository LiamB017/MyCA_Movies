@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Movies</div>

                <div class="card-body">
                    @if (count($movies)=== 0)
                    <p>There are no Movies </p>
                    @else
                      <table id="table-movies" class="table table-hover">
                          <thead>
                              <th>Title</th>
                              <th>Genre</th>
                              <th>Release_date</th>
                              <th>Description</th>
                              <th>Director</th>
                              <th>Age_rating</th>
                              <th>Run_time</th>
                              <th></th>
</thead>
<tbody>
    @foreach ($movies as $movie)
    <tr data-id="{{ $movie->id }}">
        <td>{{ $movie->title}}</td>
        <td>{{ $movie->genre}}</td>
        <td>{{ $movie->release_date}}</td>
        <td>{{ $movie->description}}</td>
        <td>{{ $movie->age_rating}}</td>
        <td>{{ $movie->run_time}}</td>
        <td>
            <a href="{{ route('user.movies.show', $movie->$id) }}" class="btn btn-primary">View</a>
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


              