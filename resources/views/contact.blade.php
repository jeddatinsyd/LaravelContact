<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Contact</title>
</head>
<body>



	<form action="/add_data" method="post">
		{{ csrf_field() }}
		<div class="container">
			<div class="jumbotron" style="margin-top: 5%;">
				<h1>Contact</h1>
				<hr>
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter name" required="">
				</div>	
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" placeholder="Enter email" required="">
				</div>	
				<div class="form-group">
					<label>Contact#</label>
					<input type="text" class="form-control" name="contact" placeholder="Enter contact no." required="">
				</div>	
				<div class="form-group">
					<label>address</label>
					<input type="text" class="form-control" name="address" placeholder="Enter address" required="">
				</div>
				<input type="submit" name="submit" class="btn btn-success" value="Save">
				<a href="/" class="btn btn-primary">View Contact</a>
			</div>
		</div>
	</form>
</body>
</html>