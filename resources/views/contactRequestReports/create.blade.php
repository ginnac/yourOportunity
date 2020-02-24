@extends('layouts.base')

@section('content')

<div class="title m-b-md">

                    <div class="row">
                        <div class="col">
                            <h1>New Contact</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class='btn btn-secondary' href="/contact_request_reports">Back to Contact Requests Reports</a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                        
                            </div>
                            @endif
                            <table class="table">
                                <form action="/contact_request_reports" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" value="{{old('name')}}" class=form-control id="name" name="name" placeholder="Type Contact Name">
                                        
                                        <label for="email">Email:</label>
                                        <input type="email" value="{{old('email')}}" class=form-control id="email" name="email" placeholder="Type Contact Email">

                                        <label  for="phone_number">Phone Number:</label>
                                        <input type="number" value="{{old('phone_number')}}" class=form-control id="phone_number" name="phone_number" placeholder="Type Contact Phone Number">

                                        <label  for="comments">Comments:</label>
                                        <input type="text" value="{{old('comments')}}" class=form-control id="comments" name="comments" placeholder="Type Comments">
                                        
                                        <input type="text" class="form-control" id="source" name="source" value="{{Auth::user()->name}}" hidden> Created by {{ Auth::user()->name }} </input>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection