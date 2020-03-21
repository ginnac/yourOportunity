@extends('layouts.base')

@section('content')

<div class="title m-b-md mt-4 mb-5">

                    <div class="row">
                        <div class="col">
                            <h1 class="text-white font-weight-bold">Delete Contact</h1>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <a class='btn btn-dark ml-2' href="/contact_request_reports">No, Back To Contact List</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table table mt-2 mb-3">
                                <form action="/contact_request_reports/{{$report->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="ml-3 font-weight-bold btn btn-primary btnsize">Yes, Please Delete</button>
                                </form>
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection