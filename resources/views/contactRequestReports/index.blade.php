@extends('layouts.base')

@section('content')

<div class="title m-b-md">

                    <div class="row"></div>
                        <div class="col"></div>
                            <h5>Contact Requests</h5>
                                <table class="table">
                                    @foreach($contactRequests as $contactRequest)
                                    <tr>
                                        <td>{{$contactRequest->name}}</td>
                                    </tr> 
                                    @endforeach
                                </table>
                           
</div>

@endsection