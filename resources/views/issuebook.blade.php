<style type="text/css">
		@media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

 *{
        
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.bg{
  background-color: gray;
}
	</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
    	
    	<section class=" h-custom" style="background-color: black;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <!--  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
            class="w-100" style="height: 80px;"
            alt="Sample photo">  -->
          <div class="card-body p-4 p-md-5">
          	<center>
             <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Issue Book</h3>
             </center>
		
	<form action="/issuebookinsert" method="post">
		@csrf
		<table>			
				<tr>
					<td>Student Name</td>
			
				 <td>
				
				                                                                                                                                 


							<select name="sname" id="name" >
								 @foreach($student as $value)   
       <option value="{{$value->name}}">{{$value->name}}</option>
        @endforeach
 
        </select>
       
        </td>

      </tr>

               
     <tr>
      @foreach($book as $value)
      
							 
     <tr> <td>Book No.</td>
    <td > {{$value->bookno}}</td>
    <input type="hidden" name="bookno" value="{{$value->bookno}}">
  </tr>
					 <tr>
      <td>Name</td>
  <td name="name"> {{$value->name}}</td>
  <input type="hidden" name="name" value="{{$value->name}}">
</tr>
					 
					 <tr>
       <td>Auther</td>
     <td name="auther">{{$value->auther}}</td>
     <input type="hidden" name="auther" value="{{$value->auther}}">
   </tr>
					<tr>
       <td >Edition</td>
     <td name="edition">{{$value->edition}}</td>
     <input type="hidden" name="edition" value="{{$value->edition}}">
   </tr>
					 <tr>
    <td>Publisher</td>
     <td name="Publisher">{{$value->publisher}}</td>
     <input type="hidden" name="publisher" value="{{$value->publisher}}"> 
   </tr>
				 
				
				@endforeach
				<tr>
					<td>Issue Date</td>
					<td><input type="Date" name="issuedate"></td>
				</tr>
				<tr>
					<td style="margin-top:5px;">Return Date</td>
					<td ><input type="Date" name="returndate" style="margin-top:5px;"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" style="margin-top:15px;"></td>
				</tr>
				
		</table>  
		
	
	</form>

	