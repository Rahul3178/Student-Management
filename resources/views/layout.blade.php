<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1 , shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

<!--- google fonts file--->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    @section('header')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand logo" href="#">
                        <img src="{{asset('images/mario.png')}}" width="60" height="60" > 
                </a>
                <h5 class="mx-sm-auto">Student Management</h5><br><br>
                
                <div class="col-2">

                    <ul class="navbar-nav"> 
                        
                        <li class="nav-item "><a class="nav-link" href="home">
                        <span class="material-icons">
                            home
                            </span></a></li>
                        <li class="nav-items"><a class="nav-link" href="list"> 
                       <span class="material-icons">
                           list
                            </span>
                       </a></li>
                        
                    </ul>
                </div>
               
            </nav>
            </div>
            @show
            @section('content')
            <div class="content">

            </div>
            @show
        </div>
    </div>
   

            
           
</body>
</html>