@extends('layouts.app')

@section('content')


<div class="title m-b-md">

                    <div class="row">
                        <div class="col">
                         <h1 class="font-weight-bold">Prospects List <i class="fa fa-list"></i></h1>
                        </div>
                    </div>
                    <div class="mt-2 mb-4 d-flex flex-row-reverse">
                        <div class="p-2">
                            <a class='btn btn-primary btnsize' href="/contact_request_reports/create">Create A New Contact</a>
                        </div>
                        <div class="p-2">
                            <a class='btn btn-primary btnsize' href="/sendEmails">Bulk send Email to All</a>
                        </div>
                        <div class="p-2">
                            <a class='btn btn-primary btnsize' href="/textsms">Bulk send Text Messages to All</a>
                        </div>
                        
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="col">
                            <table class="table table-hover table-responsive-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Prospect ID</th>
                                        <th scope="col">Name</th>  
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col" class="">Phone Number</th>
                                    </tr>
                                </thead>
                                @foreach($contactRequests as $contactRequest)
                                    
                                    <tr>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}">{{$contactRequest->id}}</a></td>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}">{{$contactRequest->name}}</a></td>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}/edit">Edit</a></td>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}/confirmDelete">Delete</a></td> 
                                        <td class="" value="{{$contactRequest->phone_number}}"> {{$contactRequest->phone_number}} </td>
                                    </tr> 
                                @endforeach
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection