@extends('app')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2 class="h2title">LOAD</h2>
		<center>
			<form class="form-horizontal loadpanel">
				<div class="form-group">
					<label class="col-sm-3 control-label">Card ID:</label>
					<div class="col-sm-9 input-group">
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Amount:</label>
					<div class="col-sm-9 input-group">
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">O.R. Number:</label>
					<div class="col-sm-9 input-group">
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">O.R. Date:</label>
					<div class="col-sm-9 input-group">
						<input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d') ?>">
					</div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      	<button type="submit" class="btn btn-submitload">Submit</button>
				    </div>
				</div>
			</form>
		</center>
	</div>
</div>

@endsection