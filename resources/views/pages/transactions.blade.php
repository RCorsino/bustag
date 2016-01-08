@extends('app')

@section('content')

<div>
	<div class="transhead">
		<ul class="transmenu" style="margin-bottom: 0px;">
			<li> 
				<input type="button" class="trans-btn" onclick="gettrans('Load')" value="Loading History">
			</li>
			<li>					
				<input type="button" class="trans-btn" onclick="gettrans('Trip')" value="Trip History">
			</li>
		</ul>
	</div>
	<div id="disptrans">
		<div class="jumbotron">
			<h2>Welcome to Transactions Page!</h2>
			<br>
				<h4> Here, you can view your customer's <b>LOADING HISTORY</b>
				and their <b>TRIP HISTORY</b>!</h4>
			</pre>
		</div>
		
	</div>
	
</div>

@endsection