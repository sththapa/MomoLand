@extends('layouts.layout')
    @section('content')
        

    

            <div class="content">
                <div class="title m-b-md">
                    Momoms List
                   
                    @foreach($momos as $momo)
                        <h3>{{$momo['type']}}</h3>
                <p>-{{$momo['quantity']}}</p>
                    @endforeach
                </div>

             


             
            </div>
        </div>

        @endsection
 
