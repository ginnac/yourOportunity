
@extends('layouts.base')

@section('content')

<div class="mt-5">
         <form action='' method='post'>
              @csrf
                      @if($errors->any())
              <ul>
             @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
             @endforeach
        @endif

        @if( session( 'success' ) )
             {{ session( 'success' ) }}
        @endif

             <label>Phone numbers (seperate with a comma [,])</label>
             <input type="text" name='numbers' value="{{$bulkNumbers}}" class=form-control id="numbers" name="numbers">

            <label>Message</label>
            <textarea name='message'></textarea>

            <button type='submit'>Send!</button>
      </form>
</div>

@endsection