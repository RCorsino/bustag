<!DOCTYPE html>
<html>
<head>
	<title>Log in to BusTap</title>
	<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" href="{{ URL::asset('/css/custom.css') }}">
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>


<body>
	<div class="container-fluid">
		<div class="col-md-9 ">
			<div>
				<div class="jumbotron" style="background-color:#DFF1FF;">
				  <h1>Welcome to BusTap!</h1>
				  <p>&nbsp;</p>
				</div>
			</div>
			
		</div>
		<div class="col-md-3 ">
			 @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <h5>{{ $error }}</h5>
                                @endforeach
                            </ul>
                        </div>
                    @endif
			<div class="profile profile-sidebar mybox" style="padding: 5px 20px 30px 20px;">
				<h4>Log in</h4>
				<hr>
				<form role="form" method="POST" action="{{ url('/login') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" name="adminemail" placeholder="someone@example.com">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="*******">
				  </div>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('/register') }}">Create new account!</a>
				</form>
			</div>
		</div>
	</div>	
</body>
</html>