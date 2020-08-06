@extends('layouts.layout')
@section('content')
      

            <div class="content formcontent">
             <form action="/momos" method="POST">
              @csrf
              <label for="" class="mtype">Momo Type:</label>
         
              <input type="text" name="type" placeholder="Enter your type">
              <br>
                <label for="" class="mquantity">Select Your Quantity:</label>
              <input type="radio" name="quantity" value="full">Full
              <input type="radio" name="quantity" value="half">Half
              <br>
              <label for="" class="mflavour">What's your flovour?</label>
              <input type="text" name="flavour" placeholder="add your flavour">
              <br>
              <input type="submit" class="submit">
            </form>

             
            </div>
        </div>
        @endsection