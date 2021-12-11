@extends('layouts.app')

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
                              <td>{{ $movies->title }}</td>
</tr>
<tr>
                          <thead>
                              <td>Genre</td>
                              <td>{{ $movies->description }}</td>
</tr>
<tr>
                          <thead>
                              <td>Release_date</td>
                              <td>{{ $movies->location }}</td>
</tr>
<tr>
                          <thead>
                              <td>Description</td>
                              <td>{{ $movies->start_date }}</td>
</tr>
<tr>
                          <thead>
                              <td>Director</td>
                              <td>{{ $movies->end_date }}</td>
</tr>
<tr>
                          <thead>
                              <td>Age_rating</td>
                              <td>{{ $movies->contact_name }}</td>
</tr>
<tr>
                          <thead>
                              <td>Run_time</td>
                              <td>{{ $movies->contact_email }}</td>
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