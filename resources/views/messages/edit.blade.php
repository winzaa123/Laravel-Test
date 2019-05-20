<!-- edit.blade.php -->

@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Book
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
      <form method="post" action="{{ route('messages.update', $message->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name"> Title:</label>
              <input type="text" class="form-control" name="title" value="{{$message->title}}"/>
          </div>
          <div class="form-group">
              <label for="price"> Message :</label>
              <input type="text" class="form-control" name="message" value="{{$message->message}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Message</button>
      </form>
  </div>
</div>
@endsection