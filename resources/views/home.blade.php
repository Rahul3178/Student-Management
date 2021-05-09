@extends('layout')
 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-6">
             
             <form class="f1  d-flex justify-content-center mt-sm-5" 
             
             action="#" method="">
                 <img src="{{asset('images/pokemon.png')}}" width="70" height="70" alt="">
                 <br><br>
                 <label>Admission Form</label><br>
                 <input class="in" type="text "placeholder="Registration number"></input><br>
                 <input class="in" type="text "placeholder="Name"><br>
                 <input class="in" type="text" placeholder="class"><br>
                 <input class="in" type="text "placeholder="Roll"><br>
                 <button class=" btn btn-success"type="submit">Submit</button>

             </form>
         </div>
         <div class="col-6">
             <table  class="table table-bordered table-striped mt-sm-5 table-hover">
                 <tr class="table-success">
                     <th >Registration Nu.</th>
                     <th>Name</th>
                     <th>Roll</th>
                     <th>Class</th>
                     <th>Operation</th>
                 </tr>
             </table>
         </div>
     </div>
 </div>
 @endsection