@extends('layouts.base')

@section('content')

<div class="title m-b-md">

                    <div class="row">
                        <div class="col">
                            <h1>The opportunity of your life!</h1>
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
                    <div class="row">
                        <div class="col">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/tQxaEIeVH0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
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
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection