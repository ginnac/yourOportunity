@extends('layouts.base')

@section('content')

<div class="title m-b-md">

                    <div class="row mt-4 mb-3">
                        <div class="col w-100">
                            <h1 class="text-center display-4">The Opportunity of your Life <i class="fa fa-exclamation"></i></h1>
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
                        <div class="col-md-8 p-2 border">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/c7mNDmlfNK0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-2 d-flex flex-column">
                            <div class="p-2 border mb-3">
                                <iframe class="w-100" src="https://www.youtube.com/embed/tQxaEIeVH0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="p-2 border">
                                <iframe class="w-100" src="https://www.youtube.com/embed/h5XgZ6xSrro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>   
                    </div>

                    <div class="row bg-dark mt-5 pt-4 pb-5">
                
                        <div class="col">
                            <h3 class="mb-2 text-secondary text-right mr-3">...For more information, fill out this form</h3>
                            
                            <form action="/opportunity" method="POST">
                                    @csrf
                                    <div class="form-group mt-5">
                                    <div class="row w-100">
                                        <div class="flex-column pr-3 pl-4">
                                            <label class="" for="name">Name:</label>
                                        </div>
                                        <div class="flex-column flex-fill pr-3 pl-4">
                                            <input type="text" value="{{old('name')}}" class="form-control" id="name" name="name" placeholder="Type your Name">
                                        </div>
                                    </div>

                                    <div class="row w-100 mt-4">
                                        <div class="flex-column pr-3 pl-4">
                                            <label class="mt-2" for="email">Email:</label>
                                        </div>
                                        <div class="flex-column flex-fill pr-3 pl-4">
                                            <input type="email" value="{{old('email')}}" class=form-control id="email" name="email" placeholder="Type your Email">
                                        </div>
                                    </div>


                                    <div class="row w-100 mt-4">
                                        <div class="flex-column pr-3 pl-4">
                                            <label class="mt-2" for="phone_number">Phone Number:</label>
                                        </div>
                                        <div class="flex-column flex-fill pr-3 pl-4">
                                            <input type="number" value="{{old('phone_number')}}" class=form-control id="phone_number" name="phone_number" placeholder="Type Your Mobile Phone Number">
                                        </div>
                                    </div>

                                    <div class="row w-100 mt-4">
                                        <div class="flex-column pr-3 pl-4">
                                            <label class="mt-2" for="comments">Comments:</label>
                                        </div>
                                        <div class="flex-column flex-fill pr-3 pl-4">
                                            <input type="text" value="{{old('comments')}}" class=form-control id="comments" name="comments" placeholder="Leave Your Comments Here">
                                        </div>
                                    </div>
                                        
                                        
                                        
                                    <input type="text" class="form-control" id="source" name="source" value="system" hidden> </input>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary mt-2 font-weight-bold">Submit</button>
                                    </div>
                                    
                            </form>
                        </div>
                    </div>
                            
                    <footer class="divFooter">
                    </footer>
                                
                           
</div>

@endsection