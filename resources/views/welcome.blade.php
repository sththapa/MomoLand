@extends('layouts.layout')
@section('content')
      

            <div class="content welbody">
                <div class="title m-b-md">
                    <h1 class="title">MOMOLAND</h1>
                </div>
                <div>
                    <img src="/img/momo.jpg" alt="" height="300px" width="300px" class="welcimg">
                </div>
                <a href="/momos/create" class="welanchor">Choose your Momo Type</a>
            <h2 style="text-align: center">{{session('msg')}}</h2>

             
            </div>
        </div>
        @endsection
