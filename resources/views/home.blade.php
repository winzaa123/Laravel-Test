@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary"
                  href="{{ route('messages.index')}}" role="button" 
                 >
                   Create Message
                 </a>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
