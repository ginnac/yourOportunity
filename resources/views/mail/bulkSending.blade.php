@extends('layouts.app')

@section('content')


<div class="title m-b-md">

                    <div class="row">
                        <div class="col">
                            <h1 class="mt-2 float-right font-weight-bold">Send Email To All Prospects <i class="fa fa-envelope ml-1"></i></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table table-hover table-responsive-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">id#</th>
                                        <th scope="col"> Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                @foreach($contactRequests as $contactRequest)  
                                    <tr>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}">{{$contactRequest->id}}</a></td>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}">{{$contactRequest->name}}</a></td>
                                        <td value="{{$contactRequest->email}}"> {{$contactRequest->email}} </td>
                                    </tr> 
                                @endforeach
                            </table>
                        </div>
                    </div>


                    <div class="row">
                    <div class="col">
                    
                    <form action='' method='post'>
                    <div class="row">
                        
                        @csrf
                            @if($errors->any())
                                <ul class="text-danger">
                                    @foreach($errors->all() as $error)
                                        <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                            @endif
         

                            <ul>
                                @if( session( 'success' ) )
                                    <li class="text-success">
                                        {{ session( 'success' ) }}
                                    </li> 
                                @endif
                            </ul>
                    </div>

                        
                    <div class="row pr-5 pl-5 pt-3 pb-5 bg-secondary text-white border" >
                        
                        <div class="row w-100">
                            <div class="col-6">
                                <div class="mt-3 mb-3"><h2>Build your Email</h2></div>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-danger float-right mt-3 mb-3" href="/contact_request_reports"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        
                        <!-- <div class="row" class="w-100"> -->
                            <label class="mt-3">Subject</label>
                            <input class="w-100 form-control" name='subject'></input>
                        <!-- </div> -->
                        
                        <!-- <div class="row"class="w-100" > -->
                            <label class="mt-3">Message</label>
                            <textarea class="w-100 form-control" name='message' rows="12"></textarea>
                        <!-- </div> -->
                        
                        <div class="row mt-4 mb-3 w-100">
               
                        <div class="col w-100">
                            <button class="btn btn-primary font-weight-bold" type='submit' >Bulk Send Email</button>
                        </div>

               
                        </div>
                    
                   
                    </div>

                    </form>   
                    </div>
                    </div>


                    


                            
                                
                           
</div>

@endsection