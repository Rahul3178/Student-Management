@extends('layout')
 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-6">
             
             <form class="f1  d-flex justify-content-center mt-sm-5" 
             action="" method="">
                @csrf
                 <img src="{{asset('images/pokemon.png')}}" width="70" height="70" alt="">
                 <br><br>
                 <label>Admission Form</label><br>
                 <input class="in" type="text"name="reg" placeholder="Registration number"></input><br>
                 <input class="in" type="text" name="name"placeholder="Name"><br>
                 <input class="in" type="text" name="class" placeholder="class"><br>
                 <input class="in" type="text" name="roll"placeholder="Roll"><br>
                 <button class=" btn btn-success"type="submit">Update</button>

             </form>
         </div>
         <div class="col-6">
             
         </div>
     </div>
 </div>
 @endsection