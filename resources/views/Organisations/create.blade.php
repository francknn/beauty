@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>

      <div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('organisations.store') }}">
          <div class="form-group">
              @csrf
              <label for="nom"> Nom:</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="pays">Pays:</label>
              <input type="text" class="form-control" name="pays"/>
          </div>
          <div class="form-group">
              <label for="ville">Ville:</label>
              <input type="text" class="form-control" name="ville"/>
          </div>
          <div class="form-group">
              <label for="user_id">user:</label>
              <input type="text" class="form-control" name="user_id"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
         @endsection
