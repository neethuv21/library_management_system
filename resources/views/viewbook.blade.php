<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="\css\style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Library Website</title>
    <style type="text/css">
      *{
        
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.bg{
  background-color: #800000;
}
    </style>
  </head>
  <body>
    
<nav class="navbar navbar-expand-md bg">
  
    <a class="navbar-brand   fs-3 ms-4 text-white  fw-bold " href="#">YM LIBRARY</a>
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </nav>
  
 <center>   
<table class="table table-striped w-auto" style="height: 400px;">
<h2  style="margin-top:30px; font-style: italic;">Book Details</h2>
  <!--Table head-->
  <thead style="text-align: center;">
    <tr>
      <th>id</th>
				<th>BookNo</th>
				<th>Name</th>
				<th>Auther</th>
				<th>Edition</th>
				<th>Publisher</th>
      
     <!--  <th style="color:purple;">Status</th> -->
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody style="text-align: center;">
    @foreach($result as $value)   
    <tr class="table" style="background-color:#B88F8F;">
      <th scope="row" >{{$value->id}}</th>
      <td style="font-weight: 600;">{{$value->bookno}}</td>
  <td style="font-weight: 600;">{{$value->name}}</td>
   <td style="font-weight: 600;">{{$value->auther}}</td>
    <td style="font-weight: 600;">{{$value->edition}}</td>
     <td style="font-weight: 600;">{{$value->publisher}}</td>

     <td><a href="/edit/{{$value->id}}">
     	<span class="badge badge rounded-pill " style="background-color:gray;color: white;text-decoration: none;">Update</span>
     </a></td>

			<td><a href="/delete/{{$value->id}}">
				<span class="badge badge rounded-pill " style="background-color:gray;color: white;text-decoration: none;">Delete</span>
			</a></td>
			<!-- <td><a href="/issuebook/{{$value->id}}">
				<span class="badge badge rounded-pill " style="background-color:gray;color: white;text-decoration: none;">Issue Book</span>
				
			</a></td> -->

  
     
    </tr>
    @endforeach
  </tbody>
  <!--Table body-->


</table>
</center>

</body>
</html>

				
							
				