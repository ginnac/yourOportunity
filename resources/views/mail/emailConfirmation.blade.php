@extends('layouts.app')

@section('content')


<div class="title m-b-md">
            @if(isset($confirmationMessage))
                <ul class="list-unstyled mt-4 mb-5">
                    @if($confirmationMessage == 'error')
                        <li class="alert alert-danger">
                                An error occurred. Please have an Email Administrator verify that emails were sent successfully.
                        </li>

                    @else
                        <li class="alert alert-success">
                            {{$confirmationMessage}}
                        </li>
                    
                    @endif
                
                </ul>
            @endif



    <div class="row bg-dark text-white rounded mt-5 mr-3 ml-3">
        <div class="col">
            <div class="p-2 ">
                <a class='btn btn-secondary btnsize' href="/sendEmails">Back</a>
            </div>  
        </div>

        <div class="col">
            <div class="p-2">
                <a class='btn btn-primary btnsize float-right' href="/contact_request_reports">Home</a>
            </div>
        </div>
    </div>


                    


                            
                                
                           
</div>

@endsection