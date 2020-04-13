
@extends('layouts.base')

@section('content')

<div class="mt-4 p-5 mb-5 bg-light text-dark border">
         <form action='' method='post' class="form-group">
              @csrf
        @if($errors->any())
         <ul class="text-danger">
           @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
           @endforeach
          </ul>
        @endif
         

        <ul>
        @if( session( 'success' ) )
            <li class="text-success">
               {{ session( 'success' ) }}
            </li> 
        @endif
        </ul>
          
          <h2 class="font-weight-bold">Send text Messages for {{$report->name}}</h2>

          <div class="col">
               <a class="btn btn-secondary float-right" href="/contact_request_reports/{{$report->id}}">Cancel</a>
          </div>

          <label class="mt-4 font-weight-bold"> Sending to Phone Number:</label>
          <input type="text" name='number' value="{{$report->phone_number}}" class=form-control id="number" name="number" hidden>
          <p>{{$report->phone_number}}</p>
          </input> 
          

          <label class="mt-3 font-weight-bold">Message:</label>
          <textarea name='message' class="w-100 form-control" rows="12"></textarea>

          <div class="row mt-4">
               
               <div class="col">
                    <button class="btn btn-primary font-weight-bold" type='submit' >Send Text Message</button>
               </div>

               
          </div>
          
      </form>
</div>

@endsection