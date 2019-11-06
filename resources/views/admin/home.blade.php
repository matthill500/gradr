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

                    Welcome to Gradr!! You are logged in as an admin <a href="{{route('admin.questions.index')}}">Questions</a>
                  <br> Learn more <a href="{{route('about')}}">About us</a>
                  <br> Admin <a href="{{route('admin.questions.deleteRequests')}}">Delete Question requests</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
