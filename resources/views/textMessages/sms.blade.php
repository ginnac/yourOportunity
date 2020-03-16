
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
          
          <h2>Bulk Send text Messages</h2>

          <div class="col">
               <a class="btn btn-secondary float-right" href="/contact_request_reports">Cancel</a>
          </div>

          <label class="mt-4 font-weight-bold"> Sending to:</label>
          <input type="text" name='numbers' value="{{$bulkNumbers}}" class=form-control id="numbers" name="numbers" hidden>
          <p>{{$bulkNumbers}}</p>
          </input> 
          

          <label class="mt-3 font-weight-bold">Message:</label>
          <textarea name='message' class="w-100 form-control" rows="12"></textarea>

          <div class="row mt-4">
               
               <div class="col">
                    <button class="btn btn-primary font-weight-bold" type='submit' >Send Bulk Text Message</button>
               </div>

               
          </div>
          
      </form>
</div>

@endsection