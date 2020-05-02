@extends('layouts.base')

@section('content')

<div class="title m-b-md mt-4 mb-5">

                    <div class="row">
                        <div class="col-md-11 col-xs-12">
                            <h1 class="float-right text-white-50 font-weight-bold">Add New Contact <i class="fa fa-user-plus text-white"></i></h1>
                        </div>
                        <div class="col-md-1 col-xs-12 mt-1">
                            <a class='btn btn-dark float-right' href="/contact_request_reports"><i class="fa fa-home"></i></a>
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
                                    
                                    <div class="form-group row">
                                        <div class="flex-column pr-3 pl-4">
                                            <label class="font-weight-bold" for="name">Name:</label>
                                        </div>
                                        <div class="flex-column flex-fill pr-3">
                                            <input type="text" value="{{old('name')}}" class="form-control mb-3" id="name" name="name" placeholder="Type Contact Name">
                                        </div>
                                            
                                    </div>

                                    <div class="form-group row">
                                        <div class="flex-column pr-3 pl-4">
                                            <label class="font-weight-bold" for="email">Email:</label>
                                        </div>
                                        <div class="flex-column flex-fill pr-3">
                                            <input type="email" value="{{old('email')}}" class="form-control mb-3" id="email" name="email" placeholder="Type Contact Email">
                                        </div>   
                                    </div>

                                    <div class="form-group row">
                                        <div class="flex-column pr-3 pl-4">
                                            <label class="font-weight-bold" for="phone_number">Phone Number:</label>
                                        </div>
                                        <div class="flex-column flex-fill pr-3">
                                            <input type="number" value="{{old('phone_number')}}" class="form-control mb-3" id="phone_number" name="phone_number" placeholder="Type Contact Phone Number">
                                        </div>   
                                    </div>

                                    <div class="form-group row">
                                        <div class="flex-column pr-3 pl-4">
                                            <label  class="font-weight-bold" for="comments">Comments:</label>
                                        </div>
                                        <div class="flex-column flex-fill pr-3">
                                            <input type="text" value="{{old('comments')}}" class="form-control mb-3" id="comments" name="comments" placeholder="Type Comments"> 
                                        </div>   
                                    </div>

                                    <div class="form-group row w-100">
                                        <div class="col">
                                            <input type="text" class="form-control mb-3" id="source" name="source" value="{{Auth::user()->name}}" hidden> <p class="pl-4 d-flex justify-content-end">Created by {{ Auth::user()->name }}</p> </input>
                                        </div>
                                    </div>  
                                    <button type="submit" class="btn btn-success mt-2 mr-4 font-weight-bold btnsize float-right"><i class="fa fa-save"></i> Save</button>
                                </form>
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection