@extends('layouts.base')

@section('content')

<div class="title m-b-md mt-4 mb-5">

                    <div class="row">
                        <div class="col">
                            <h1 class="float-right text-white-50 font-weight-bold"> Contact Details for {{$report->name}}</h1>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <a class='btn btn-dark float-right' href="/contact_request_reports">Back To Contact List</a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <a class='btn btn-info float-right' href="/contact_request_reports/{{$report->id}}/confirmSendMail">Send Email</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3>Prospect Details</h3>
                             <table class="table">
                                <tr>
                                    <td class="text-white-50">Name: <p class="text-white">{{$report->name}}</p></td>
                                </tr>
                                <tr>
                                    <td class="text-white-50">ID#: {{$report->id}}</td>
                                </tr>
                                <tr>
                                    <td class="text-white-50">Phone Number: <p class="text-white">{{$report->phone_number}}</p></td>
                                </tr>
                                <tr>
                                    <td class="text-white-50">Email:<p class="text-white">{{$report->email}}</p></td>
                                </tr>
                                <tr>
                                    <td class="text-white-50">Prospect's Initial Message: <p class="text-white">{{$report->comments}}</p></td>
                                </tr>
                                <tr>
                                    <td class="text-white-50">Created by: <p class="text-white"> {{$report->source}}</p></td>
                                </tr>
                                <tr>
                                    <!-- <td>Created on/Last updated on: {{($report->created_at)->format('d/m/Y')}}/{{$report->updated_at}}</td> -->
                                    <td class="text-white-50" >Created on {{($report->created_at)->format('l jS \\of F Y h:i:s A')}}</td>
                                </tr>
                                <tr>
                                    <td class="text-white-50">Last update on {{($report->updated_at)->format('l jS \\of F Y h:i:s A')}}</td>
                                </tr>
                             </table>

                        </div>
                    </div>
                    <div class="row mt-5">
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
                                        <td class="text-white">{{$contactAttemptNote->Notes}}</td>
                                        <td class="text-white-50">{{$contactAttemptNote->by_user}}</td>
                                        <td class="text-white-50">{{($contactAttemptNote->created_at)->format('l jS \\of F Y h:i:s A')}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                       
                    </div>
                    <div class="row">
                            <div class="col">
                                <a class='btn btn-primary font-weight-bold btnsize' href="/contact_request_reports/{{$report->id}}/notes/create">New Note</a>
                            </div>
                        </div>
                                
                           
</div>

@endsection