@extends('layouts.base')

@section('content')

<div class="title m-b-md mt-4 mb-5">

                    <div class="row mt-4 mb-3">
                       
                        <div class="col-xs-10 col-md-11">
                            <h1 class="float-right text-white font-weight-bold"> {{$report->name}} <i class="fa fa-id-card text-white-50"></i></h1>
                        </div>
                        <div class="col-xs-2 col-md-1">
                            <a class='btn btn-light mt-2 pt-1 pb-1 text-center font-weight-bold align-middle' href="/contact_request_reports"><i class="fa fa-home"></i></a>
                        </div>
                    </div>
                   
                   
                    <div class="row">
                        <div class="col">
                           
                            <div class="row mt-5 mb-2 ">
                                <div class="col-6">
                                    <h3 class="">Prospect Details <i class="fa fa-info-circle"></i></h3>  
                                </div>
                                <div class="col-6">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col d-flex justify-content-end mb-1">
                                            <a class='btn btn-info font-weight-bold' href="/contact_request_reports/{{$report->id}}/confirmSendMail">Send Email <i class="fa fa-envelope"></i></a>
                                        </div>
                                        <div class="col d-flex justify-content-end mb-1">
                                            <a class='btn btn-info font-weight-bold' href="/contact_request_reports/{{$report->id}}/oneTextSms">Send SMS <i class="fa fa-comment"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                             <table class="table table-responsive-sm">
                             <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="text-center">Name </th>
                                        <th scope="col" class="text-center">ID#</th>  
                                        <th scope="col" class="text-center">Phone Number</th>
                                        <th scope="col" class="text-center">Email</th>
                                        <th scope="col" class="text-Center">Initial Message</th>
                                        <th scope="col" class="text-center">Source</th>
                                        <th scope="col" class="text-center">Created on</th>
                                        <th scope="col" class="text-center">Updated on</th>
                                    </tr>
                                </thead>

                                <tr>
                                    <td> <p class="text-white text-center">{{$report->name}}</p></td>
                                    <td class="text-white text-center">{{$report->id}}</td>
                                    <td><p class="text-white text-center">{{$report->phone_number}}</p></td>
                                    <td><p class="text-white text-center">{{$report->email}}</p></td>
                                    <td class="text-white-50 text-center"><p>{{$report->comments}}</p></td>
                                    <td class="text-white-50 text-center"><p>Created by {{$report->source}}</p></td>
                                     <!-- <td>Created on/Last updated on: {{($report->created_at)->format('d/m/Y')}}/{{$report->updated_at}}</td> -->
                                    <td class="text-white-50 text-center" >Created on {{($report->created_at)->format('l jS \\of F Y h:i:s A')}}</td>
                                    <td class="text-white-50 text-center">Last update on {{($report->updated_at)->format('l jS \\of F Y h:i:s A')}}</td>
                                </tr>
                            
                             </table>

                        </div>
                        
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div class="row mb-2">
                                <div class="col">
                                    <h3>Contact Notes <i class="fa fa-clipboard"></i></h3>
                                </div>
                                <div class="col">
                                    <div class="row dd-flex justify-content-end">
                                        <div class="col d-flex justify-content-end mb-1">
                                            <a class='btn btn-success font-weight-bold btnsize' href="/contact_request_reports/{{$report->id}}/notes/create"><i class="fa fa-plus"></i> New Note</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <table class="table table-hover table-responsive-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">Note</th>
                                        <th class="text-center">Entered by</th>
                                        <th class="text-center">Created on</th>
                                    </tr>
                                </thead>
                                @foreach($report->contactAttemptNotes as $contactAttemptNote)
                                    <tr>
                                        <td class="text-white text-center">{{$contactAttemptNote->Notes}}</td>
                                        <td class="text-white-50 text-center">{{$contactAttemptNote->by_user}}</td>
                                        <td class="text-white-50 text-center">{{($contactAttemptNote->created_at)->format('l jS \\of F Y h:i:s A')}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                       
                    </div>
                   
                                
                           
</div>

@endsection