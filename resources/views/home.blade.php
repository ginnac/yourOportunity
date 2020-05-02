@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center d-flex align-items-stretch">
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

                        <img class="ml-3 float-left" src="https://opportunity-application.s3.us-east-2.amazonaws.com/{{auth()->user()->image}}" style="width: 150px; height: 150px; border-radius: 50%;"/>
                        
                        <div class="float-left text-success mt-2">
                            <h3> Welcome Back {{ Auth::user()->name }}! </h3>
                        
                            <h6 class="ml-3 mt-2">
                                {{ Auth::user()->email}}
                            </h6>

                            <p class="ml-3 mt-5 text-secondary">
                                User since {{ date_format(Auth::user()->created_at,"M, d Y")}}
                            </p>
                        </div>
                        
                        
                    
                    </div>
                </div> 
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header bg-dark text-white">Quick Links</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        
                        <li class="ml-3">
                            <a href="/profile">Profile</a>
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
