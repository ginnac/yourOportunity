
@extends('layouts.base')

@section('content')

<div class="mt-5 p-5 mb-5 bg-light text-dark border border-white rounded">
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
          
          <div class="row">
               <div class="col-xs-12 col-md-6">
                    <h2 class="font-weight-bold">Send Text Messages to {{$report->name}}</h2>
               </div>

               <div class="col-md-6">
                    <a class="btn btn-secondary float-right" href="/contact_request_reports/{{$report->id}}"><i class="fa fa-times"></i></a>
               </div>
          
          </div>
          
          <div class="row mt-3">
               <div class="col-xs-6 col-md-4 col-lg-3">
                    <label class="font-weight-bold text-danger"> Sending to Phone Number:</label>
               </div>
               <div class="col-xs-6 col-md-8 col-lg-9">
                    <input type="text" name='number' value="{{$report->phone_number}}" class="form-control" id="number" name="number" hidden>
                         <p class="text-danger">{{$report->phone_number}}</p>
                    </input> 
               </div>
          </div>
          
          
          

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