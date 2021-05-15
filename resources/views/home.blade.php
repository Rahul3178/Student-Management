@extends('layout')
 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-6">
             
             <form class="f1  d-flex justify-content-center mt-sm-5" 
             action="create" method="post">
                @csrf
                 <img src="{{asset('images/pokemon.png')}}" width="70" height="70" alt="">
                 <br><br>
                 <label>Admission Form</label><br>
                 <input class="in" type="text"name="reg" placeholder="Registration number"></input><br>
                 <input class="in" type="text" name="name"placeholder="Name"><br>
                 <input class="in" type="text" name="class" placeholder="class"><br>
                 <input class="in" type="text" name="roll"placeholder="Roll"><br>
                 <button class=" btn btn-success"type="submit">Submit</button>

             </form>
         </div>
         <div class="col-6">
             <table  class="table table-bordered table-striped mt-sm-5 table-hover">
                 <tr class="table-success">
                     <th >Id</th>
                     <th >Registration Nu.</th>
                     <th>Name</th>
                     <th>Roll</th>
                     <th>Class</th>
                     <th>Operation</th>
                     </tr>
                     @foreach($Students as $Student)
                    <tr>
                        <td>{{$Student['id']}}</td>
                        <td>{{$Student['registration']}}</td>
                        <td>{{$Student['name']}}</td>
                        <td>{{$Student['class']}}</td>
                        <td>{{$Student['roll']}}</td>
                        <td>
                            <button class="btn " type="button"><span class="material-icons">person_add</span></button>
                            <button class="btn " type="button"><span class="material-icons">delete</span></button>
                        </td>
                        </tr>
                    @endforeach
                 
             </table>
         </div>
     </div>
 </div>
 @endsection