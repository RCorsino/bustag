<!DOCTYPE html>
<html>
<head>
	<title>BusTap</title>
	<link href="{{ URL::asset('back-to-top/css/reset.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('back-to-top/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

	

	<script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/active.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

	<script type="text/javascript">
		$( document ).ready(function() {
		    $('.nav').on('click', 'li', function(){
			    $('.nav li').removeClass('active');
			    $(this).addClass('active');
			});

			$('.msg').on('click', 'li', function(){
			    $('.msg li').removeClass('selectedmsg');
			    $(this).find('input[type="button"]').removeClass('unread');
			    $(this).addClass('selectedmsg');
			});

			$('.transhead').on('click', 'li', function(){
			    $('.transhead li').removeClass('selectedtranstab');
			    $(this).addClass('selectedtranstab');
			});

			$('#datePicker')
		        .datepicker({
		            format: 'mm/dd/yyyy'
		        })
		        .on('changeDate', function(e) {
		            // Revalidate the date field
		            $('#eventForm').formValidation('revalidateField', 'date');
		    });


		});

	</script>

	<script>
        function getmsg(str) {
           	if (str == "") {
                document.getElementById("dispmsg").innerHTML = "";
                return;
            } else { 
                    
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
                } else {
       	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
	                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	                    document.getElementById("dispmsg").innerHTML = xmlhttp.responseText; 
	                }
                }
                xmlhttp.open("GET","messages.php?q="+str,true);
                xmlhttp.send();
            }
        }

        function gettrans(str) {
           	if (str == "") {
                document.getElementById("disptrans").innerHTML = "";
                return;
            } else { 
                    
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
                } else {
       	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
	                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	                    document.getElementById("disptrans").innerHTML = xmlhttp.responseText; 
	                }
                }
                xmlhttp.open("GET","gettransactions.php?q="+str,true);
                xmlhttp.send();
            }
        }
        </script>

</head>
<body>
	<div class="container-fluid">
	    <div class="row profile">
	    	<div class="col-md-3 ">
			@include('pages/header')
			</div>
			<div class="col-md-9">
	            <div class="profile-content mybox" id="content">

	            	@yield('content')
					<?php
					// if (!isset($_GET['page'])) {
					// 	include 'welcome.php';
					// }
					// else
					// {

					// 	// include $_GET['page'].'.php';
					// }
					?>
	            </div>
			</div>
		</div>
		<a href="#0" class="cd-top">Top</a>

	</div>
</body>
</html>