@extends('layouts.base')

@section('content')

<div class="title m-b-md">

                    <div class="row">
                        <div class="col">
                            <h1>Send Email</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class='btn btn-secondary' href="/contact_request_reports">Back to Contact Requests Reports</a>
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
                                <form action="/contact_request_reports/{{$report->id}}/sendMail" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="text" value="{{old('email')}}" class=form-control id="email" name="email" placeholder="Type email">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Email</button>
                                </form>
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection