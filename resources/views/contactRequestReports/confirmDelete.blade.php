@extends('layouts.base')

@section('content')

<div class="title m-b-md mt-4 mb-5">

                    <div class="row">
                        <div class="col">
                            <h1 class="float-right text-white-50 font-weight-bold">Delete Contact Page</h1>
                        </div>
                    </div>

                    <div class="row bg-dark mt-5 pt-2 pb-5">
                    

                    <div class="row mt-2 w-100">
                        <div class="col">
                            <h4 class="text-white text-center font-weight-bold ml-2">Are you sure you want to delete {{$report->name}} from the contacts list?</h4>
                        </div>
                    </div>
                  
                    <div class="row w-100 mt-3 mb-2">
                        <div class="col-6 w-100 ">
                            <a class='btn btn-primary ml-3 w-100' href="/contact_request_reports">No, Back To Contact List</a>
                        </div>
                        <div class="col-6 w-100">
                            <table class="table table">
                                <form action="/contact_request_reports/{{$report->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="w-100 ml-3 font-weight-bold btn btn-danger btnsize">Yes, Please Delete</button>
                                </form>
                            </table>
                        </div>
                    </div>

                    <div>
                    

                            
                                
                           
</div>

@endsection