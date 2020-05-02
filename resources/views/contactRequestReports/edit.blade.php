@extends('layouts.base')

@section('content')

<div class="title m-b-md mt-4 mb-5">

                    <div class="row mt-5 mb-5">
                        <div class="col-md-11 col-xs-12">
                            <h1 class="float-right text-white-50 font-weight-bold">Edit Contact Details for {{$report->name}} <i class="fa fa-edit text-white"></i></h1>
                        </div>
                        <div class="col-md-1 col-xs-12 mt-1">
                            <a class='btn btn-dark float-right' href="/contact_request_reports"><i class="fa fa-home"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table mt-2 mb-3">
                                <form action="/contact_request_reports/{{$report->id}}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <div class="flex-column pr-3 pl-4">
                                            <label class="font-weight-bold mr-1" for="name">Name:</label>
                                        </div>
                                        <div class="flex-column flex-fill pr-3">
                                            <input type="text" value="{{$report->name}}" class=form-control id="name" name="name" placeholder="Enter Contact's Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="flex-column pr-3 pl-4">
                                            <label class="font-weight-bold mr-1" for="phone_number">Phone Number:</label>
                                        </div>
                                        <div class="flex-column flex-fill pr-3">
                                            <input type="text" value="{{$report->phone_number}}" class=form-control id="phone_number" name="phone_number" placeholder="Enter Contact's Phone Number">
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="flex-column pr-3 pl-4">
                                            <label class="font-weight-bold" for="email">Email:</label>
                                        </div>
                                        <div class="flex-column flex-fill pr-3">
                                            <input type="text" value="{{$report->email}}" class=form-control id="email" name="email" placeholder="Enter Contact's Email">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success mt-2 font-weight-bold btnsize float-right"><i class="fa fa-save"></i> Save</button>
                                </form>
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection