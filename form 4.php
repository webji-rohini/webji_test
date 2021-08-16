<!DOCTYPE html>
<html>
<head>
	<title></title>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
       <h2><center>Address Information</center></h2>
       <hr>
       <div class="container">
          <h4>Current Address</h4>
            <div class="row">
            	<div class="col-md-6">
            		<label>State</label>
            		<select class="form-control" id="s1" name="s1">
            		<option >Select</option>
		     		<option >Maharashtra</option>
		     		<option >Kerala</option>
		     		<option >Rajasthan</option>
		     		<option >Uttarakhand</option>
		     		<option >Himachal Pradesh</option>
		     		


		     	</select>	
            		
            	</div>
            	<div class="col-md-6">
            		<label>District</label>
            		<select class="form-control" id="d1" name="d1">
            		<option>Select</option>
		     		<option>Amravati</option>
		     		<option >Akola</option>
		     		<option >tivsa</option>
		     		<option>Bhandar</option>
		     		<option >Buldhan</option>
		     		<option></option>
		     		


		     	</select>
		     	</div>	
            		
            	</div>
            	 <div class="row">
            	  <div class="col-md-6">
            		<label>City</label>
            		<select class="form-control" id="c1" name="c1">
            		<option>Select</option>
		     		<option>Maharashtra</option>
		     		<option >Kerala</option>
		     		<option>Rajasthan</option>
		     		<option>Uttarakhand</option>
		     		<option>Himachal Pradesh</option>
		     		


		     	</select>	
            		
            	</div>
            	 <div class="col-md-6">
            		<label>Village</label>
            		<input type="text" class="form-control" id="v1" name="v1">
            	</div>
                </div>
                <div class="row">
            	  <div class="col-md-6">
            		<label>Pincode</label>
            		<select class="form-control" id="p1" name="p1">
            		<option>Select</option>
            		<option>444607</option>
		     		<option>444606</option>
		     		<option>444605</option>
		     		<option>444604</option>
		     		<option>444603</option>
		     		<option>444602</option>
		            </select>	
            		
            	</div>
            	 <div class="col-md-6">
            		<label>House No</label>
            		<select class="form-control" id="h1" name="h1">
            		<option>Select</option>
            		<option>Rent</option>
		     		<option>Owned</option>
		     		
		            </select>	
            		
                </div>
                </div>
            <div class="row">
            	<div class="col-md-6">
            		<label>Landmark 1 :</label>
            		<input type="text" class="form-control" placeholder="Enter the Landmark 1" id="l1" name="l1">
		            	
            		
            	</div>
            	<div class="col-md-6">
            		<label>landmark 2 :</label>
            		<input type="text" class="form-control" placeholder="Enter the Landmark 2" id="l2" name="l2">
               </div>
               </div>
               <div class="row">
            	<div class="col-md-6">
            		<label>Landmark 3 :</label>
            		<input type="text" class="form-control" placeholder="Enter the Landmark 3" id="l3" name="l3">
		            	
            		
            	</div>
            	<div class="col-md-6">
            		<label>landmark 4 :</label>
            		<input type="text" class="form-control" placeholder="Enter the Landmark 4" id="l4" name="l4">
               </div>
               </div>
               <div class="row">
            	<div class="col-md-6">
            		<label>House Type</label>
            		<select class="form-control" id="ht1" name="ht1">
            		<option>Select</option>
            		<option>Rent</option>
		     		<option>Owned</option>
		     		
		            </select>
		            	
            		
            	</div>
            	<div class="col-md-6">
            		<label>Map link</label>
            		<input type="text" class="form-control" placeholder="Enter the map link"  id="m1" name="m1" >
               </div>
               </div>
           

               
               <br>
               <div class="row">
               	<div class="col-md-12">
               	<center><label >Set current as parmanent
               			<input type="checkbox" value="" id="check1" name="check1">
               </label>
               </center>
               <br>
               <label>Show Parmanet Address tab:</label>
               <select class="form-control"  id="showhide">
            	   <option>Select</option>
		     		<option value="1">Hide</option>
		     		<option value="2">Show</option>
		     	    </select>
		     	    
               
             
            		
      
       <div class="container" id="Parmanent" style="display: none;" >
          <h4>Parmanent Address</h4>
            <div class="row">
            	<div class="col-md-6">
            		<label>State</label>
            	<select class="form-control" id="s1" name="s1">
            		<option>Select</option>
		     		<option value="">Maharashtra</option>
		     		<option value="">Kerala</option>
		     		<option v>Rajasthan</option>
		     		<option >Uttarakhand</option>
		     		<option >Himachal Pradesh</option>
		     		


		     	</select>	
            		
            	</div>
       
            	<div class="col-md-6">
            		<label>District</label>
            		<select class="form-control" id="d2" name="d2">
            		<option>Select</option>
		     		<option value="Amravati">Amravati</option>
		     		<option value="Akola">Akola</option>
		     		<option value="ivsa">tivsa</option>
		     		<option value="bhandar">Bhandar</option>
		     		<option value="Buldhan">Buldhan</option>
		     		
		     		


		     	</select>
		     	</div>	
            		
            	</div>

            	 <div class="row">
            	  <div class="col-md-6">
            		<label>City</label>
            		<select class="form-control" id="c2" name="c2">
            		<option>Select</option>
		     		<option value="Maharashtra">Maharashtra</option>
		     		<option value="Kerala">Kerala</option>
		     		<option value="Rajasthan">Rajasthan</option>
		     		<option value="Uttarakhand">Uttarakhand</option>
		     		<option value="Himachal Pradesh">Himachal Pradesh</option>
		     		


		     	</select>	
            		
            	</div>
            	 <div class="col-md-6">
            		<label>Village</label>
            		<input type="text" class="form-control" placeholder="Enter the Village Name" id="v2" name="v2">
            	</div>
                </div>
                <div class="row">
            	  <div class="col-md-6">
            		<label>Pincode</label>
            		<select class="form-control" id="p2" name="p2">
            		<option>Select</option>
            		<option value="444607">444607</option>
		     		<option value="444606">444606</option>
		     		<option value="444605">444605</option>
		     		<option value="444604">444604</option>
		     		<option value="444603">444603</option>
		     		<option value="444602">444602</option>
		            </select>	
            		
            	</div>
            	 <div class="col-md-6">
            		<label>House No</label>
            		<input type="text" class="form-control" placeholder="Enter the House No" id="h2" name="h2">
                </div>
                </div>
            <div class="row">
            	<div class="col-md-6">
            		<label>Landmark 1 :</label>
            		<input type="text" class="form-control" placeholder="Enter the Landmark 1" id="l12" name="l12">
		            	
            		
            	</div>
            	<div class="col-md-6">
            		<label>landmark 2 :</label>
            		<input type="text" class="form-control" placeholder="Enter the Landmark 2" id="l22" name="l22">
               </div>
               </div>
               <div class="row">
            	<div class="col-md-6">
            		<label>Landmark 3 :</label>
            		<input type="text" class="form-control" placeholder="Enter the Landmark 3" id="l32" name="l32">
		            	
            		
            	</div>
            	<div class="col-md-6">
            		<label>landmark 4 :</label>
            		<input type="text" class="form-control" placeholder="Enter the Landmark 4" id="l42" name="l42">
               </div>
               </div>
               <div class="row">
            	<div class="col-md-6">
            		<label>House Type</label>
            		<select class="form-control" id="ht2" name="ht2">
            		<option>Select</option>
            		<option>Rent</option>
		     		<option>Owned</option>
		     		
		            </select>
		            	
            		
            	</div>
            	<div class="col-md-6">
            		<label>Map link</label>
            		<input type="text" class="form-control" placeholder="Enter the Map link" id="m2" name="m2">
               </div>
               </div>
               <br>
               <br>
           </div>    
       </div>
       <script>
       function setaddress(){
  if ($("#check1").is(":checked")) {
    $('#s2').val($('#s1').val());
     $('#c2').val($('#c1').val());
      $('#d2').val($('#d1').val());
      $('#v2').val($('#v1').val());
     $('#h2').val($('#h1').val());
      $('#l12').val($('#l1').val());
       $('#l22').val($('#l2').val());
     $('#l32').val($('#l3').val());
      $('#l42').val($('#l4').val());
      $('#ht2').val($('#ht1').val());
      $('#m2').val($('#m1').val());

  }
  else
  {
    
    $('#s2').val("select");
    $('#c2').val("select");
    $('#d2').val("select");
    $('#v2').val("select");
    $('#h2').val("select");
    $('#l12').val("select");
    $('#l22').val("select");
    $('#l32').val("select");
    $('#l42').val("select");
    $('#ht2').val("select");
    $('#m2').val("select");


  }
}

$('#check1').click(function(){
  setaddress();
})
</script>
<script>
$(document).ready(function(){
 $('#showhide').change(function(){
  var asd = this.value;
  // alert(asd);
  if (asd==1) {
    $('#Parmanent').hide();
  }else{
    $('#Parmanent').show();
}
  })
 });


</script>
</body>
</html>