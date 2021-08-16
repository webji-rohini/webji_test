<!DOCTYPE html>
<html>
<head>
	
	
	
	<title>Bootstrap</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style type="text/css">
		.a{
			border-style:hidden;
		} 
	</style>
</head>
<body> 
	<center><h2>Customer Details :</h2></center>
    <div class="container">
    	<h4>Full Name:</h4>
    	  <div class="row">
              <div class="col-md-6">
		     	<div class="form-group">
		     			<input type="text" class="form-control" id="fname">
		     			<small class="form-text text-muted">First Name</small>
		     			</div>
		     		</div>
		     	
		     	<div class="col-md-6">
		     		<div class="form-group">
		     			<input type="text" class="form-control" id="fname">
		     			<small class="form-text text-muted">Last Name</small>
		     			</div>
		     		</div>
		     	</div>

		  <h4>Street Address 1:</h4>
		
		     	<div class="form-group">
		     			<input type="text" class="form-control" id="fname">
		     			<small class="form-text text-muted">Street Address 1:</small>
		     	</div>
		     	
		     	
		     	<div class="form-group">
		     			<input type="text" class="form-control" id="fname">
		     			<small class="form-text text-muted">Street Address 2:</small>
		     	</div>
		     	 <div class="row">
              <div class="col-md-6">
		     	<div class="form-group">
		     			<input type="text" class="form-control" id="fname">
		     			<small class="form-text text-muted">City</small>
		     			</div>
		     		</div>
		     	
		     	<div class="col-md-6">
		     		<div class="form-group">
		     			<input type="text" class="form-control" id="fname">
		     			<small class="form-text text-muted">State</small>
		     			</div>
		     		</div>
		     	</div>



		     	<h4>Phone Number:</h4>
		     	<div class="form-group">
		     		<input class="form-control" type="tel" name="phone" placeholder="(000) 000 -000" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br> 
		     		<br>
		     		
		     	</div>
		     	<h4>Email:</h4>
		     	<div class="form-group">
		     		<input class="form-control" type="email"  placeholder="ex :email@yahoo.com" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required> 
		     		<br> 
		     		<br>
		     	</div>
		     	<h4>How did you hear about us?</h4>
		     	<select class="form-group" id="sel">
		     		<option>Please Select</option>
		     		<option>Newapaper</option>
		     		<option>Internet</option>
		     		<option>Magzine</option>
		     		<option>Other</option>
		     		


		     	</select>	
		     	<p><h4>Feedback about us :</h4></p>

<textarea style="width: 100%"rows="5">

</textarea>	

<p><h4>Suggestions if any for further imporvement:</h4></p>

<textarea style="width: 100%" rows="5" >

</textarea>

<h4>Will you be willing to recommend us?</h4>
<div type="checkbox" >
<label > <input type="checkbox" value="">Yes</label>
	</div>
<div type="checkbox" >
<label ><input type="checkbox"  value="">Maybe</label>
</div>
<div type="checkbox" >
<label ><input type="checkbox" value="">No</label>
</div>

<br>
<p> Please give reference of any two people whom you feel:</p>
<table class= "table table-bordered">
  <tr>
  	<th style="border-style:hidden;"></th>
    <th class="active">Full Name</th>
    <th class="active">Address</th> 
    <th class="active">Contact Number</th>
  </tr>
  <tr>
    <td class="active">1</td>
    <td><input type="text" name="fname" class="form-control a"></td>
    <td ><input type="text" name="Address" class="form-control a"></td>
    <td ><input type="text" name="Cnumber" class="form-control a"></td>
  </tr>
  <tr>
    <td class="active">2</td>
    <td><input type="text" name="fname" class="form-control a"></td>
    <td><input type="text" name="Address" class="form-control a"></td>
    <td><input type="text" name="Cnumber" class="form-control a"></td>
  </tr>
  <br>


  
</table>
<br>
 <button type="button" class="btn btn-success" style="width: 100%"><h4>Submit</h4></button>
 <br>
 <br>

	</div>   
		
	</div>
	


</body>
</html>