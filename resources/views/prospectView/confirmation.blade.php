@extends('layouts.base')

@section('content')

<div class="title m-b-md">

    <h1> Thank you {{$prospect}} for submitting your request!</h1>
    <h3> We will contact you briefly!</h3>
    <!-- <h6> You can also text HELP to 999-999-9999 to start the conversation</h6>                       -->

    <div class="row">
        <div class="col">
            <a class='btn btn-primary' href="/opportunity">Back</a>
        </div>
    </div>
</div>

@endsection