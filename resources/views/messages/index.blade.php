<!-- index.blade.php -->

@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="{{ route('home')}}" class="btn btn-link  ">back</a>

  <a href="{{ route('messages.create')}}" class="btn btn-primary">Create</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Message</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->title}}</td>
            <td>{{$d->message}}</td>
            <td><a href="{{ route('messages.edit',$d->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('messages.destroy', $d->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection