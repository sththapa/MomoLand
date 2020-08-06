@extends('layouts.layout')
@section('content')
      

            <div class="content">
                <div class="title m-b-md">
                <h1>{{$momos->type}}</h1>
                <h2>{{$momos->quantity}}</h2>
                <h3>{{$momos->flavour}}</h3>
                </div>
            <form action="/momos/{{$momos->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button style="display:block;margin:0 auto">Complete Order</button>
                </form>
             
            </div>
        </div>
        @endsection