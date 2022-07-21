<!doctype html>
<html>
<head>

	<style type="text/css">
		.gradient-custom {
/* fallback for old browsers */
background: gray;
/* Chrome 10-25, Safari 5.1-6 */
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<body>

		<section class=" gradient-custom">
  <div class="container  " style="height:800px;">
    <div class="row justify-content-center align-items-center ">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <center>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            </center>
            <form action="\studentinsert" method="post" >
			      @csrf

              <div class="row">
                <div class="col-md-9 mb-4">
                	<div class="form-outline">
                    <input type="number"  name="rollno" class="form-control form-control-lg" />
                    <label class="form-label" > Roll No.</label>
                  </div>

                  <div class="form-outline">
                    <input type="text"  name="name" class="form-control form-control-lg" />
                    <label class="form-label" > Name</label>
                  </div>

                </div>
                <div class="col-md-9 mb-4">

                  <div class="form-outline">
                    <input type="email"  name="email" class="form-control form-control-lg" />
                    <label class="form-label" >Email</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-9 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="password" class="form-control form-control-lg" name="password"  />
                    <label  class="form-label">Password</label>
                  </div>

                </div>
              
              </div>

              <div class="row">
               <div class="col-md-9 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <select name="course" id="course" class="form-control form-control-lg" >
                    
               <option value="Dca">Dca</option>
                <option value="pgdca">pgdca</option>
    
              </select>
              <label class="form-label" >Course</label>
                  </div>

                </div>
               
              </div>

             

              <div class="mt-4 pt-2">
                <input class="btn btn-secondary btn-lg" type="submit" value="Submit" />
              </div>

            </form>

          </div>

        </div>
      </div>
    </div>
  </div>
</section>
	
    
 		</body>

		</html>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: violet;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 35px 46px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: violet;
}
</style>
<body style="margin:0px; background-image: url(image1.jpg);" >
	<div style="width:100%;height:100px;background-color: violet;border: 1px solid;">
		<ul>
  <li><a href="\addbook">Add Book</a></li>
  <li><a href="\viewbook">View Book Details</a></li>
  <li><a href="\viewissue">View Issue Book</a></li>
    <li><a href="\registerstudent">Register Student</a></li>
  <li ><a  href="\viewstudent">View Student</a></li>
</ul>
		
	</div>
	<div style="margin-top: 50px; margin-left: 230px;">

	<center>
    <form action="/studentinsert" method="post">
    	@csrf
	<table>
		<tr>
			<td style="color:white;"><h1>Roll No</h1></td>
			<td><input type="number" name="rollno"></td>
		</tr>
		<tr>
			<td style="color:white;"><h1>Name</h1></td>
			<td>

        <input type="text" name="name">
    </td>
		</tr>
		<tr>
		<td style="color:white;"><h1>Course</h1></td>
		<td >
		
   </td>
	</tr>
	
	<tr>
		<td></td>
		<td style="color:white;"><input type="submit" name="submit"></td>
	</tr>
	</table>
</form>
</center>
</div>
</body>
</html> -->