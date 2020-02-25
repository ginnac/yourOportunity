@extends('layouts.base')

@section('content')

<div class="title m-b-md">

                    <div class="row">
                        <div class="col">
                            <h1> Contact Information for {{$report->name}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class='btn btn-secondary' href="/contact_request_reports">Back to Contact Requests Reports</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class='btn btn-primary' href="/contact_request_reports/{{$report->id}}/confirmSendMail">Send Contact Details Email</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3>Prospect Details</h3>
                             <table class="table">
                                <tr>
                                    <td>Name: {{$report->name}}</td>
                                </tr>
                                <tr>
                                    <td>ID#: {{$report->id}}</td>
                                </tr>
                                <tr>
                                    <td>Phone Number: {{$report->phone_number}}</td>
                                </tr>
                                <tr>
                                    <td>Email: {{$report->email}}</td>
                                </tr>
                                <tr>
                                    <td>Prospect Initial Comments: {{$report->comments}}</td>
                                </tr>
                                <tr>
                                    <td>Created by: {{$report->source}}</td>
                                </tr>
                                <tr>
                                    <!-- <td>Created on/Last updated on: {{($report->created_at)->format('d/m/Y')}}/{{$report->updated_at}}</td> -->
                                    <td>Created on: {{($report->created_at)->format('l jS \\of F Y h:i:s A')}}</td>
                                </tr>
                                <tr>
                                    <td>Last updated on: {{($report->updated_at)->format('l jS \\of F Y h:i:s A')}}</td>
                                </tr>
                             </table>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <h3>Contact Notes</h3>
                            <table class="table">

                                    <tr>
                                        <th>Note</th>
                                        <th>Entered by</th>
                                        <th>Created on</th>
                                    </tr>
                                @foreach($report->contactAttemptNotes as $contactAttemptNote)
                                    <tr>
                                        <td>{{$contactAttemptNote->Notes}}</td>
                                        <td>{{$contactAttemptNote->by_user}}</td>
                                        <td>{{($contactAttemptNote->created_at)->format('l jS \\of F Y h:i:s A')}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                       
                    </div>
                    <div class="row">
                            <div class="col">
                                <a class='btn btn-primary' href="/contact_request_reports/{{$report->id}}/notes/create">New Note</a>
                            </div>
                        </div>
                                
                           
</div>

@endsection