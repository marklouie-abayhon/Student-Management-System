<!DOCTYPE html>
<html lang="en">
<head>
  <title>Final Term</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"> 
  <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

  




</head>
<body>
@include('navbar')
<div class="jumbotron text-center">
  <h1>Student Management System</h1>
  <img src="https://www.teacherease.com/images/redesign_images/basicmanagement/man%20at%20desk.png" class="card-img-top" alt="..." width="75" height="400">
</div>
  
<div class="container-fluid"> 

<div class="row">

@include('sidebar')


  
    <div class="col-10">

<img src="https://www.kindpng.com/picc/m/443-4434475_courses-in-shri-rr-college-at-theni-childrens.png" class="card-img-top" alt="..." width="75" height="150">
<table class="table table-striped table-hover" id='myTable'>
<caption>List of Course and Class Schedule</caption>
    <thead class="thead-light">
        <tr>
            <td>ID</td>
            <td>Course Name</td>
            <td>Teacher Name</td>
            <td>Batch Time </td>
            <td>Teaching Day </td>
        </tr>
    </thead>
    <tbody>
        @foreach($course as $c )
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->Course_Name}}</td>
            <td>{{$c->Teacher_Name}}</td>
            <td>{{$c->Batch_Time}} </td>
            <td>{{$c->Teaching_Day}} </td>
            
        </tr>
        @endforeach
    </tbody>

</table>
<img src="https://p13cdn4static.sharpschool.com/UserFiles/Servers/Server_97704/Image/Activities.png" class="card-img-top" alt="..." width="75" height="150">
<table class="table table-striped table-hover" id='myTable'>
<caption>Students Event</caption>
    <thead class="thead-light">
        <tr>
            <td>Title</td>
            <td>Event Start</td>
            <td>Event Ends</td>
        </tr>
    </thead>
    <tbody>
        @foreach($event as $c)
        <tr>
            <td>{{$c->title}}</td>
            <td>{{$c->start}}</td>
            <td>{{$c->end}}</td>

            
        </tr>
        @endforeach
    </tbody>

</table>
    </div>
</div>

