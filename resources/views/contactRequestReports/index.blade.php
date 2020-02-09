@extends('layouts.base')

@section('content')

<div class="title m-b-md">

                    <div class="row">
                        <div class="col">
                            <h1>Contact Requests</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class='btn btn-primary' href="/contact_request_reports/create">create a new contact</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                @foreach($contactRequests as $contactRequest)
                                    <tr>
                                        <td>{{$contactRequest->name}}</td>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}/edit">Edit</a></td>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}/confirmDelete">Delete</a></td> 
                                    </tr> 
                                @endforeach
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection