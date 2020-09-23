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

<div class="container">
	<div class="jumbotron">
		@if(\Session::has('success'))
			<div class="alert alert-success"> 
				<h4>{{\Session::get('success')}}</h4>
			</div>
			<hr>
		@endif

		<h1>My Contact List</h1>
		<hr>

		<div class="line" style="text-align: right;">
			<a href="/addcontact" class="btn btn-primary">Add Contact </a>
		</div><br>

		<form>
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
					
						<th>Name</th>
						<th>Email</th>
						<th>Contact</th>
						<th>Address</th>
						<th>Avatar</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<tbody>
						<thead>
							@foreach ($contact as $row)
							<tr style="background: white;">
								<td>{{$row->name}}</td>
								<td>{{$row->email}}</td>
								<td>{{$row->contact}}</td>
								<td>{{$row->address}}</td>
								<td> <img src="{{ asset('uploads/contact/'. $row->image) }}" width="100px;" height="100px;" alt="Image"> </td>

								<td><a href="edit/{{$row->id}}" class="btn btn-success">edit</td>
								<td><a href="delete/{{$row->id}}" class="btn btn-warning">delete</td>
								
							</tr>
							@endforeach
						</thead>
					</tbody>
				</thead>
			</table>
		</form>

	</div>
</div>

</body>
</html>