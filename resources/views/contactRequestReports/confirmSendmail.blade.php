@extends('layouts.base')

@section('content')

<div class="title m-b-md">

                    <div class="row mt-4 mb-5">                        
                        <div class="col">
                            <h1 class="text-white-50 font-weight-bold float-right">Send an Email to {{$report->name}}</h1>
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
                        </div>
                    </div>
                            @endif
                           
                    <div class="pr-5 pl-5 pt-3 pb-5 bg-dark text-white border" >
                        
                        <div class="row w-100">
                            <div class="col-6">
                                <div class="mt-3 mb-3"><h2>Build your Email</h2></div>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-danger float-right mt-3 mb-3" href="/contact_request_reports/{{$report->id}}"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        
                            <form action="/contact_request_reports/{{$report->id}}/sendMail" method="POST">
                                @csrf
                                <div class="row form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" value="{{old('email')}}" class=form-control id="email" name="email" placeholder="{{$report->email}}">
                                    
                                    <label class="mt-3">Subject</label>
                                    <input class="w-100 form-control" name='subject'></input>

                                    <label class="mt-3">Message</label>
                                    <textarea class="w-100 form-control" name='message' rows="12"></textarea>
                                    
                                    <div class="row w-100 mt-4">
                                        <div class="col">
                                            <button class="btn btn-primary font-weight-bold" type='submit' >Send Email</button>
                                        </div>
                                    </div>
                                    
                                </div>
                                           
                                    
                            </form>
                        </div>
                    </div>
                          
                                  
                           
</div>

@endsection