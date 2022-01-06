@extends('layouts.app')

<!-- This is the view in which users may add a new movie, admin.movies.store saves the 
movie to the database and allows it to be displayed on the index page once submitted -->

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Add new Movie
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.movies.store')  }}">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
              </div>
              <div class="form-group">
                <label for="description">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}" />
              </div>
              <div class="form-group">
                <label for="release_year">Relase</label>
                <input type="date" class="form-control" id="release_year" name="release_year" value="{{ old('release_year') }}" />
              </div>
              <div class="form-group">
                <label for="start_date"> Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
              </div>
              <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ old('director') }}" />
              </div>
              <div class="form-group">
                <label for="age_rating">Age Rating</label>
                <input type="text" class="form-control" id="age_rating" name="age_rating" value="{{ old('age_rating') }}" />
              </div>
              <div class="form-group">
                <label for="run_time">Runtime</label>
                <input type="text" class="form-control" id="run_time" name="run_time" value="{{ old('run_time') }}" />
              </div>
              

              <a href="{{ route('admin.movies.index') }}" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection