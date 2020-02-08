@extends('layouts.base')

@section('content')

<div class="title m-b-md">

                    <div class="row">
                        <div class="col">
                            <h1>New Contact</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class='btn btn-secondary' href="/contact_request_reports">Back to Contact Requests Reports</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <form action="/contact_request_reports" method="POST">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" class=form-control id="name" name="name" placeholder="Type Contact Name">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection