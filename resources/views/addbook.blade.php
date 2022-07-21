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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  


   
    	
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
             <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Add Books</h3>
             </center>


            <form action="/bookinsert" method="post">
    	     @csrf


    	      <div class=" mb-4" style="margin-left: 40px; margin-top: 25px;">
              	 <label class="fw-bold"  >Book No.</label>

               <input type="number" name="bookno" style="width:250px;margin-left: 10px;">

              </div>
            	<div class=" mb-4" style="margin-left: 40px;">
              	  <label  class=" fw-bold"> Name</label>

  <select name="name" class="select" style="width:250px;margin-left: 35px;">
    <option value="" disabled>Book Names</option>
    <option value="making of new india">Making of new india</option>
        <option value="whispers of time">whispers of time</option>
                 
      </select>

              </div>
              <div class=" mb-4" style="margin-left: 40px;">
              	<label for="exampleDatepicker1" class="form-label fw-bold">Auther</label>

      <select name="auther" class="select"   style="width:250px;margin-left: 30px;">
         <option value="" disabled>Auther</option>
            <option value="Dr.bibek Debroy">Dr.bibek Debroy</option>
     <option value="Dr.krishna saksena">Dr.krishna saksena</option>     
           </select>


              </div>

             <div class=" mb-4" style="margin-left: 40px;">
        <label class="fw-bold"  >Edition</label>

     <input type="text" name="edition" style="width:250px;margin-left: 30px;">

              </div>
    <div class=" mb-4" style="margin-left: 40px;">
        <label class="fw-bold"  >Publisher</label>

     <input type="text" name="publisher" style="width:250px;margin-left: 15px;">

              </div>           
       

              <button type="submit" name="login" class="btn btn-secondary btn-lg mb-1" style="margin-left:180px;">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>






