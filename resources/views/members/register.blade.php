<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<style type="text/css"></style>
        <style>
body {
  background-image: url('img/bgreg.jpg');
   background-repeat: no-repeat;
    background-size: 50% 100%;
    background-position: right top;
    background-attachment: fixed;
    background-color: #DFE3F0;
}


</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-3 col-lg-5">
			
  @if (count($errors) > 0)
  @foreach ($errors->all() as $error)
  <p class="alert alert-danger">{{$error}}</p>
  @endforeach
  @endif
           <p id="passwordHelpBlock" class="form-text text-muted" style="color:#00ff00;">
        Important!<br/> Your password must be more than 6 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.
</p>
				<form action="{{route('members.register')}}" method="post">
					{{csrf_field()}}
  <fieldset>
    <legend>Register</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Full Name</label>
      <input type="text" class="form-control" name="name" value="{{old('name')}}"  placeholder="Full Name">      
    </div>

     
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="Enter email">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
<div class="form-group">
      <label for="exampleInputPassword1">Confirm Password</label>
      <input type="password" class="form-control" name="password_confirmation" placeholder="Password">
    </div>
    

    
    <button type="submit" class="btn btn-primary">Register</button>

  </fieldset>
</form>
<br>
<p>Back <a href="/">Home</a></p>
			</div>
		</div>
	</div>
		<script type="text/javascript"></script>
	</body>
</html>