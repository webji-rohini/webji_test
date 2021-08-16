<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<style type="text/css">
		table.center {
  margin-left: auto; 
  margin-right: auto;}
	</style>
</head>
<body>
	<h2>Customer Details :</h2>
	<br>
	<hr>
	<form style="text-align: center;">
		<label for="fname">First Name :</label>
		
		<input type="text" id="fname" name="fname" style="width: 200px;">
		
		<label for="lname">Last Name :</label>
		
		<input type="text" id="lname" name="lname" >
		<br>
		<br>
		<label for="text">Address Street :</label>
		
		<input type="text" id="Address Street" name="Address Street" style="width: 440px;" >
		<br>
		<br>
		<label for="text">City:</label>
		
		<input type="text" id="City" name="City" style="width: 230px;" >
		<label for="text">State:</label>
		
		<input type="text" id="State" name="State" style="width: 230px;">

		<br>
		<br>
		<label for="no">Number :</label>
		
		<input type="text" id="no" name="Number" style="width: 480px;" >
		<br>
		<br>
		<label for="no">Email:</label>
		
		<input type="text" id="Email" name="Email" style="width: 500px;" >
		<br>
		<br>
		<h4>How did you hear about us ?</h4>
		<label for="Choose">Choose :</label>

  <select name="Choose" id="Choose">
  	<option value="select">Select</option>
  <option value="Newspaper">Newspaper</option>
  <option value="Magzine">Magzine</option>
  <option value="Social media">Social media</option>
  <option value="other">other</option>
</select>
<br>
<br>
<p><b>Feedback about us :</b></p>

<textarea style="width: 550px" rows="5">

</textarea>
<br>
<br>
<p><b>Suggestions if any for further imporvement:</b></p>

<textarea style="width: 550px" rows="5" >

</textarea>
<br>
<br>
<h4>Will you be willing to recommend us?</h4>
<input type="checkbox" >
<label for="yes"> yes</label><br>
<input type="checkbox">
<label for="maybe"> maybe</label><br>
<input type="checkbox" >
<label for="No"> NO</label><br>
<table style="width:40%" border="1" class="center">
  <tr>
  	<th>Sr.No</th>
    <th>Full Name</th>
    <th>Address</th> 
    <th>Contact Number</th>
  </tr>
  <tr>
    <td>1</td>
    <td><input type="text" name="fname"></td>
    <td ><input type="text" name="Address"></td>
    <td ><input type="Number" name="Cnumber"></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input type="text" name="fname"></td>
    <td><input type="text" name="Address"></td>
    <td><input type="Number" name="Cnumber"></td>
  </tr>
  <br>


  
</table>
<br>
 <button type="button">Submit</button>
	</form>

</body>
</html>