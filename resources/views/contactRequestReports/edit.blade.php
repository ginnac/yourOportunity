@extends('layouts.base')

@section('content')

<div class="title m-b-md mt-4 mb-5">

                    <div class="row">
                        <div class="col">
                            <h1 class="float-right text-white-50 font-weight-bold">Edit Contact Details for {{$report->name}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class='btn btn-dark float-right' href="/contact_request_reports">Back to Contact List</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table mt-2 mb-3">
                                <form action="/contact_request_reports/{{$report->id}}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="name">Name:</label>
                                        <input type="text" class=form-control id="name" name="name" placeholder="Type Contact Name">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2 font-weight-bold btnsize">Submit</button>
                                </form>
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection