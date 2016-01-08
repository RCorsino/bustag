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
				<h4>Register</h4>
				<hr>
				<form role="form" method="POST" action="{{ url('/register') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Name</label>
				    <input type="text" class="form-control" name="adminname" placeholder="F.N  M.I  L.N" required/>
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Position</label>
				    <input type="text" class="form-control" name="adminposition" placeholder="Manager" required/>
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" name="adminemail" placeholder="someone@example.com" required/>
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" placeholder="*******" required/>
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Confirm Password</label>
				    <input type="password" class="form-control" name="password_confirmation" placeholder="*******" required/>
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Birthdate</label>
				   <!--  <input type="date" class="form-control" name="ad"> -->
				    <input type="date" id="publish_date" class="form-control" name="adminbirthdate" value="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d'); ?>" required/>
				  </div>

				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <button type="submit" class="btn btn-default">Submit</button>
				  <br/>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <a href="{{ url('/login') }}">I already have an account!</a>
				</form>
			</div>
		</div>
	</div>	
</body>
</html>