<!-- create.blade.php -->

@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Message
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
      <form method="post" action="{{ route('messages.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="price">Message :</label>
              <input type="text" class="form-control" name="message"/>
          </div>
          <button type="submit" class="btn btn-primary">Create Message</button>
      </form>
  </div>
</div>
@endsection