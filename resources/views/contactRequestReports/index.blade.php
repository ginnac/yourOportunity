@extends('layouts.app')

@section('content')


<div class="title m-b-md">

                    <div class="row">
                        <div class="col">
                            <h1>Contact Requests</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class='btn btn-primary' href="/contact_request_reports/create">Create A New Contact</a>
                        </div>
                        <div class="col">
                            <a class='btn btn-primary' href="/sendEmails">Send Bulk Emails</a>
                        </div>
                        <div class="col">
                            <a class='btn btn-primary' href="/textsms">Send Bulk Text Messages</a>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                    <tr>
                                        <th>Prospect ID</th>
                                        <th>Name</th>  
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Phone Number</th>
                                    </tr>
                                @foreach($contactRequests as $contactRequest)
                                    
                                    <tr>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}">{{$contactRequest->id}}</a></td>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}">{{$contactRequest->name}}</a></td>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}/edit">Edit</a></td>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}/confirmDelete">Delete</a></td> 
                                        <td value="{{$contactRequest->phone_number}}"> {{$contactRequest->phone_number}} </td>
                                    </tr> 
                                @endforeach
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection