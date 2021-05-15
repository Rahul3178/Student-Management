@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-bordered table-striped table-hover mt-sm-5 table-condensed">
                    <tr class="table-success">
                        <th>Id</th>
                        <th>Registration Nu.</th>
                        <th>name</th>
                        <th>Roll no.</th>
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
                            <button class="btn " type="button"><span class="material-icons">print</span></button>
                        </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection