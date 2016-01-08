@extends('app')

@section('content')

<div class="row">
	<div class="col-md-3 msg">
		<ul>
			<li> 
				<input type="button" class="notif-btn unread" onclick="getmsg(1)" value="FR: 000000000001">
			</li>
			<li>					
				<input type="button" class="notif-btn unread" onclick="getmsg(2)" value="FR: 000000000001">
			</li>
			<li>
				<input type="button" class="notif-btn unread" onclick="getmsg(3)" value="FR: 000000000001">
			</li>
		</ul>
		<center>
			<nav>
			  <ul class="pagination pagination-sm">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</center>
		
	</div>
	<div class="col-md-9" id="dispmsg">
	</div>
</div>

@endsection