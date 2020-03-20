@extends('layouts.base')

@section('content')

<div class="title m-b-md mt-4 mb-5">

                    <div class="row">
                        <div class="col">
                            <h1 class="float-right text-white-50 font-weight-bold">Add New Contact</h1>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <a class='btn btn-dark float-right' href="/contact_request_reports">Back To Contact List</a>
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
                            <table class="table mt-2 mb-3">
                                <form action="/contact_request_reports" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="name">Name:</label>
                                        <input type="text" value="{{old('name')}}" class="form-control mb-3" id="name" name="name" placeholder="Type Contact Name">
                                        
                                        <label class="font-weight-bold" for="email">Email:</label>
                                        <input type="email" value="{{old('email')}}" class="form-control mb-3" id="email" name="email" placeholder="Type Contact Email">

                                        <label class="font-weight-bold" for="phone_number">Phone Number:</label>
                                        <input type="number" value="{{old('phone_number')}}" class="form-control mb-3" id="phone_number" name="phone_number" placeholder="Type Contact Phone Number">

                                        <label  class="font-weight-bold" for="comments">Comments:</label>
                                        <input type="text" value="{{old('comments')}}" class="form-control mb-3" id="comments" name="comments" placeholder="Type Comments">
                                        
                                        <input type="text" class="form-control mb-3" id="source" name="source" value="{{Auth::user()->name}}" hidden> Created by {{ Auth::user()->name }} </input>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2 font-weight-bold btnsize">Submit</button>
                                </form>
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection