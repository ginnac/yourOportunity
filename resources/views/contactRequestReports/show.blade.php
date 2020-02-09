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
                           <h3>Details</h3>
                            <table class="table">
                                @foreach($report->contactAttemptNotes as $contactAttemptNote)
                                    <tr>
                                        <td>{{$contactAttenptNote->Notes}}</td>
                                        <td>{{$contactAttenptNote->by_user}}</td>
                                        <td>{{$contactAttenptNote->created_at}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection