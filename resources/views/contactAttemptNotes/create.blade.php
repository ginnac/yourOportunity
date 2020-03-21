@extends('layouts.base')

@section('content')

<div class="title m-b-md mt-5 mb-5">

                    <div class="row">
                        <div class="col">
                            <h1 class="float-right text-white-50 font-weight-bold">New Note for {{$report->name}}</h1>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <a class='btn btn-dark float-right' href="/contact_request_reports/{{$report->id}}">Back To Contact Details</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                        
                            </div>
                            @endif
                            <table class="table">
                                <form action="/contact_request_reports/{{$report->id}}/notes" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="Notes">Notes:</label>
                                        <textarea type="text" value="{{old('Notes')}}" class=form-control id="Notes" name="Notes" placeholder="Type Notes"> </textarea>

                                        <!-- <label for="by_user">User Name:</label>
                                        <input type="text" value="{{old('by_user')}}" class=form-control id="by_user" name="by_user" placeholder="User Name"> -->

                                        <input type="text" class="form-control" id="by_user" name="by_user" value="{{Auth::user()->name}}" hidden> Created by {{ Auth::user()->name }} </input>

                                    </div>
                                    <button type="submit" class="btn btn-primary font-weight-bold btnsize">Submit</button>
                                </form>
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection