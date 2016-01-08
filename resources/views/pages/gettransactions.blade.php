@extends('app')

@section('content')

<?php
	$q = trim($_GET['q']);
	if($q == "Load"){
		?>
		<table align="center" class="table table-striped" >
		  <thead>
		  	<th width="25%">Date and Time</th>
		  	<th width="25%">Card I.D.</th>
		  	<th width="25%">Previous Balance</th>
		  	<th width="25%">New Balance</th>
		  </thead>
		  <tr>
		  	<td>01/01/1111 01:01am</td>
		  	<td>000000000001</td>
		  	<td>PHP 10.00</td>
		  	<td>PHP 100.00</td>
		  </tr>
		  <tr>
		  	<td>01/01/1111 01:01am</td>
		  	<td>000000000002</td>
		  	<td>PHP 10.00</td>
		  	<td>PHP 100.00</td>
		  </tr>
		</table>
		<?php
	}
	elseif ($q == "Trip") {
		?>
		<table align="center" class="table table-striped" >
		  <thead>
		  	<th width="25%">Date and Time</th>
		  	<th width="25%">Card I.D.</th>
		  	<th width="25%">Starting Point</th>
		  	<th width="25%">End Point</th>
		  </thead>
		  <tr>
		  	<td>01/01/1111 01:01am</td>
		  	<td>000000000001</td>
		  	<td>U.N. Avenue</td>
		  	<td>Buendia</td>
		  </tr>
		  <tr>
		  	<td>01/01/1111 01:01am</td>
		  	<td>000000000002</td>
		  	<td>Buendia</td>
		  	<td>Ayala</td>
		  </tr>
		</table>
		<?php
	}
?>

@ensdection