@extends('layouts.base')

@section('content')

<div class="title m-b-md">

                    <div class="row mt-4 mb-3">
                        <div class="col w-100">
                            <h1 class="text-center">The opportunity of your life!</h1>
                        </div>
                    </div>
                    <div class="row">
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
                        </div>
                        <div class="col">
                        @isset($results)
                            <div class="alert alert-danger">
                                <ul>
                                    
                                    <li>{{$results}}</li>
                                   
                                </ul>
                            </div>
                        @endisset
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row mt-4 mb-4">
                        <div class="col-md-8 p-2">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/c7mNDmlfNK0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-2 d-flex flex-column">
                            <div class="p-2">
                                <iframe class="w-100" src="https://www.youtube.com/embed/tQxaEIeVH0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="p-2">
                                <iframe class="w-100" src="https://www.youtube.com/embed/h5XgZ6xSrro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>   
                    </div>

                    <div class="row mb-5 bg-dark pt-4 pb-5">
                
                        <div class="col">
                            <h4 class="mb-2 text-secondary text-right mr-3">For more information, fill out this form</h4>
                            
                            <form action="/opportunity" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" value="{{old('name')}}" class=form-control id="name" name="name" placeholder="Type your Name">
                                        
                                        <label for="email">Email:</label>
                                        <input type="email" value="{{old('email')}}" class=form-control id="email" name="email" placeholder="Type your Email">

                                        <label  for="phone_number">Phone Number:</label>
                                        <input type="number" value="{{old('phone_number')}}" class=form-control id="phone_number" name="phone_number" placeholder="Type Your Mobile Phone Number">

                                        <label  for="comments">Comments:</label>
                                        <input type="text" value="{{old('comments')}}" class=form-control id="comments" name="comments" placeholder="Leave Your Comments Here">
                                        
                                        <input type="text" class="form-control" id="source" name="source" value="system" hidden> </input>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    
                            </form>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection