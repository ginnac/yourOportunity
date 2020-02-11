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
                            <a class='btn btn-secondary' href="/contact_request_reports/{{$report->id}}/confirmSendEmail">Send Contact Details Email</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <h3>Details</h3>
                            <table class="table">
                                @foreach($report->contactAttemptNotes as $contactAttemptNote)
                                    <tr>
                                        <td>{{$contactAttemptNote->Notes}}</td>
                                        <td>{{$contactAttemptNote->by_user}}</td>
                                        <td>{{$contactAttemptNote->created_at}}</td>
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