<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Student Form</title>
<link rel="stylesheet" href="css/scss.css">
<style type="text/css">
</style>
</head>
<body>


<div class="form">
<form class="submission-form" action="includes/submit.php" method="post">
  <label for="first-name">
    		First Name
	</label>
	<input type="text" required="required" name="first-name">
  
	<label for="last-name">
   		Last Name
	</label>
  		<input type="text" required="required" name="last-name">		
  <label for="email">
      		Email
  		</label>
  		<input type="email" name="email">
  
  		<label for="phone">
    		Telephone
  		</label>
  		<input type="tel" name="phone">
  
  		<label for="idno">
			ID Number
  		</label>
  		<label for="index number">
  			Index 
		<input type="text" required="required" name="idno">
  
		<label for="district">
			Distict
		</label>
  <select name="district" required >
    <option selected hidden value="">Select District</option>
    <option value="COLOMBO">COLOMBO</option>
    <option value="GAMPAHA">GAMPAHA</option>
    <option value="KALUTARA">KALUTARA</option>
    <option value="MATALE">MATALE</option>
    <option value="KANDY">KANDY</option>
	<option value="NUWARAELIYA">NUWARAELIYA</option>
	<option value="GALLE">GALLE</option>
	<option value="MATARA">MATARA</option>
	<option value="HAMBANTOTA">HAMBANTOTA</option>
	<option value="JAFFNA">JAFFNA</option>
	<option value="KILINOCHCHI">KILINOCHCHI</option>
	<option value="MANNAR">MANNAR</option>
	<option value="MULLATIVU">MULLATIVU</option>
	<option value="VAVUNIYA">VAVUNIYA</option>
	<option value="TRINCOMALEE">TRINCOMALEE</option>
	<option value="BATTICOLOA">BATTICOLOA</option>
	<option value="AMPARA">AMPARA</option>
	<option value="PUTTALAM">PUTTALAM</option>
	<option value="KURUNEGALA">KURUNEGALA</option>
	<option value="ANURADHAPURA">ANURADHAPURA</option>
	<option value="POLONNARUWA">POLONNARUWA</option>
	<option value="BADULLA">BADULLA</option>
	<option value="MONARAGALA">MONARAGALA</option>
	<option value="KEGALLE">KEGALLE</option>
	<option value="RATNAPURA">RATNAPURA</option>
     </select>

  <label for="stream">
			Alevel Subject Stream
		</label>
  <select name="stream" required="required" >
    <option selected hidden value="">Select Alevel Stream</option>
    <option value="BIOLOGICALSCIENCE">BIOLOGICAL SCIENCE</option>
    <option value="PHYSICALSCIENCE">PHYSICAL SCIENCE</option>
    <option value="COMMERCE">COMMERCE</option>
    <option value="ARTS">ARTS</option>
    <option value="BIOSYSTEMSTECHNOLOGY">BIOSYSTEMS TECHNOLOGY</option>
	<option value="ENGINEERING TECHNOLOGY">ENGINEERING TECHNOLOGY</option>
  </select>


  <label for="zscore" >
			Z-Score
	</label>
  <input type="number" required="required" name="zscore">  


  <input type="submit" value="Send" name="sendBtn">  
</form>
</div>
</body>
</html>
