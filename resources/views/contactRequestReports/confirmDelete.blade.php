@extends('layouts.base')

@section('content')

<div class="title m-b-md">

                    <div class="row">
                        <div class="col">
                            <h1>Delete Contact</h1>
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
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </table>
                        </div>
                    </div>
                            
                                
                           
</div>

@endsection