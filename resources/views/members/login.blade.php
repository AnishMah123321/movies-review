<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
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
			
  @if ($errors->any())
  @foreach ($errors->all() as $error)
  <p class="alert alert-danger">{{$error}}</p>
  @endforeach
  @endif
           
				<form action="{{route('members.login')}}" method="post">
					{{csrf_field()}}
  <fieldset>
    <legend>Login</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="Enter email">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    
    <button type="reset" class="btn btn-primary">Cancel</button>
    <button type="submit" class="btn btn-primary">Login</button>
  </fieldset>
 <br/>
  
</form>
<a href="/login/github" style="
  text-decoration: none;
  font-family: helvetica;
  font-weight: bold;
  color: #ddd;
  background-color: black;
  height: 40px;
  display: inline-block;
  padding: 6px 12px 0 0;
  border-radius: 5px;
">
<svg xmlns="http://www.w3.org/2000/svg"
aria-label="GitHub" role="img"
viewBox="0 0 512 512" style="
  width: 30px; vertical-align: middle; border-right:0.5px solid #aaa;"
><rect
width="512" height="512" rx="15%" fill="#1B1817"/>
<path fill="#fff" d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z"/>
</svg>
<span style="padding-left: 5px;">Login with GitHub</span>
</a>
<br/> &nbsp
<p>Not registered yet? <a href="/members-register"> Register here</a></p>
  <p>Back <a href="/">Home</a></p>
  
			</div>
		</div>
	</div>

		<script type="text/javascript"></script>
	</body>
</html>