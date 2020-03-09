@extends('layouts.app')

@section('content')


<div class="title m-b-md">
                @isset($queued)
                    <ul>
                        <li>
                            {{$queued}}
                        </li>
                    </ul>
                @endisset

                    <div class="row">
                        <div class="col">
                            <h1>Email: To Prospects</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                    <tr>
                                        <th>id#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                @foreach($contactRequests as $contactRequest)  
                                    <tr>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}">{{$contactRequest->id}}</a></td>
                                        <td><a href="/contact_request_reports/{{$contactRequest->id}}">{{$contactRequest->name}}</a></td>
                                        <td value="{{$contactRequest->email}}"> {{$contactRequest->email}} </td>
                                    </tr> 
                                @endforeach
                            </table>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col">
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

                        <label>Message</label>
                        <textarea name='message'></textarea>

                        <button type='submit'>Send To All</button>
                        </form>
                        
                    </div>
                    </div>


                    


                            
                                
                           
</div>

@endsection