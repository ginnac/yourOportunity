@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white"> Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        
                        <h3> Welcome Back {{ Auth::user()->name }}! </h3>
                        
                        <p class="ml-3">
                        {{ Auth::user()->email}}
                        </p>
                        <img class="ml-3" src="https://opportunity-application.s3.us-east-2.amazonaws.com/{{auth()->user()->image}}" style="width: 150px; height: 150px; border-radius: 50%;"/>
                    
                    </div>
                </div> 
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white">Quick Links</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        
                        <li class="ml-3">
                            <a href="/register">Register</a>
                        </li>
                        <li class="ml-3">
                            <a href="/">Prospect View</a>
                        </li>
                        <li class="ml-3">
                            <a href="/contact_request_reports">Contact List</a>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
