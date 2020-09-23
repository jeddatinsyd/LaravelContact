<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Edit Contact</title>
</head>
<body>


	<form action="/update/{{$contact[0]->id}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{method_field('PUT')}}
		<div class="container">
			<div class="jumbotron" style="margin-top: 5%;">
				<h1>Contact</h1>
				<hr>

				<label>Image</label>
				<div class="input-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="image">
						<label class="custom-file-label">Choose file</label>
					</div>
				</div>	

				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" value="{{$contact[0]->name }}" placeholder="Enter name" required="">
				</div>	
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" value="{{$contact[0]->email }}" placeholder="Enter email" required="">
				</div>	
				<div class="form-group">
					<label>Contact#</label>
					<input type="text" class="form-control" name="contact" value="{{$contact[0]->contact }}" placeholder="Enter contact no." required="">
				</div>	
				<div class="form-group">
					<label>address</label>
					<input type="text" class="form-control" name="address" value="{{$contact[0]->address}}" placeholder="Enter address" required="">
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary" style="width: 15%;">Update</button>
					
				
			</div>
		</div>
	</form>


</body>
</html>