<!DOCTYPE html>
<html>
<head>
	<title>Form Page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container p-2 my-3 bg-primary text-white">
		<h1>Personal Information Page.</h1>
	</div>


	<div class="container">
	<form method="post">
		<label for="name">Your Name:</label>
		<input type="text" class="form-control col-md-4 name" placeholder="Enter Your Name">
		<br>


		<label>Select Your Gender:</label>
		<div class="form-check">
		    <input type="radio" class="form-check-input gender" id="radio1" name="gender" value="Male" checked>Male
		</div>
		<div class="form-check">
		   	<input type="radio" class="form-check-input gender" id="radio2" name="gender" value="Female">Female
		</div>
		<br>


		<label>Select Your Subject:</label>
		<div class="form-check">

		    <input type="checkbox" class="form-check-input" name="subject" value=" HTML" checked>
			<label for="html">HTML</label><br>

		   	<input type="checkbox" class="form-check-input" name="subject" value=" CSS">
			<label for="css">CSS</label><br>

		   	<input type="checkbox" class="form-check-input" name="subject" value=" JavaScript">
			<label for="javascript">JavaScript</label><br>

		   	<input type="checkbox" class="form-check-input" name="subject" value=" Bootstrap">
			<label for="bootstrap">Bootstrap</label><br>

		   	<input type="checkbox" class="form-check-input" name="subject" value=" JQuery">
			<label for="jquery">JQuery</label><br>

		</div>
		<br>


		<div class="form-group">
	      	<label for="lang">Select Your Language:</label>
	      	<select class="form-control col-md-4 lang">
	        	<option value="English">English</option>
				<option value="French">French</option>
				<option value="German">German</option>
				<option value="Hindi">Hindi</option>
	      	</select>
    	</div>
    	<button type="submit" class="btn btn-primary" onclick="Message();">Submit</button>
	</form>	
	</div>		
		

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript">
		function Message() {

			var name = $('.name').val();

			var gen = $('.gender:checked').val();

		    var sub = [];
		    $('input:checkbox[name=subject]:checked').each(function(){
		    	sub.push($(this).val());
		    });

		    var language = $('.lang').val();

			window.alert("Your Name is : "+name+"\nYour Gender is : "+gen+"\nYour Selected Subject is : "+sub+"\nYour Selected Language is : "+language);
		}
	</script>
</body>
</html>