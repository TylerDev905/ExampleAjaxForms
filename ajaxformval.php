<?php
	$status = "";
	if(isset($_GET['flag'])){
		$flag = true;
		if($flag)
			$status = '<div class="alert alert-success" role="alert"><strong>Success!</strong> Thank you for your submission.</div>';
	}
?>
<!doctype html>
<!-- 
	Logo background source http://www.psdgraphics.com/file/colorful-triangles-background.jpg 
	Regex[Phone#] source http://regexlib.com/DisplayPatterns.aspx?cattabindex=6&categoryId=7
-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
				        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
			#FormInterests {
				background-color:#777;
				padding:5px;
			}
			.main {
				margin:2%;
				margin-left:15%;
				margin-right:15%;
			}
			#StatusMessage{
				margin:2%;
				margin-left:15%;
				margin-right:15%;
			}
			blockquote{
				border-left:none;
				margin:0;
				background-color:#ccc;
				padding:1px;
				padding-top:10px;
				padding-left:10%;
				padding-right:10%;
			}
			blockquote:hover {
				padding:1px;
				padding-top:10px;
				padding-left:10%;
				padding-right:10%;
			}
			
			.textbox {
				width:60%;
				border-top-left-radius:0;
				display:inline;
			}

			.label {
				border-bottom-left-radius:0;
				border-bottom-right-radius:0;
			}
			.check {
				margin-left:25px;
				padding:10px;
			}
			input[type=checkbox]{
				margin-left:25px;
			}
			
			input[type=radio]{
				margin-left:25px;
			}
			select {
				width:60%;
			}
			.buttonWell {
				margin-left:15%;
				margin-right:15%;
			}
			.center {
				margin-left:auto;
				margin-right:0;
				text-align:center;
			}
			.panel{
				padding:0;
				background-color:#1F3E50;
				color:#EEE;
			}
			.panel-title {
				font-size:20px;
			}
			.panel-body {
				padding:0;
			}
			h2 {
				position:relative;
				top:-10px;
				text-align:center;
			}
			.well {
				border-top-left-radius:0;
				background-color:#EEEEEE;
			}
			.checkwell{
				border-top-left-radius:0;
				background-color:#EEEEEE;
				width:60%;
				padding:10px;
			}
			.jumbotron {
				background-image: url("Logo.jpg");
				padding:30px;
				color:#eee;
			}
			#footerbtns {
				margin-bottom:0;
			}
			select {
				color:#aaa;
				height:34px;
			}
			footer {
				font-size:16px;
			}
			table {
				width:100%;
				color:black;
				margin-bottom:10px;
			}
			.ui-datepicker {
				border:1px solid black;
			}
        </style>
		
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
		
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<script src="js/vendor/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery-ui.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.validate.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Comp10043: Lab5: form validation with a plugin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
	 <div class="jumbotron">
      <div class="container">
        <h1><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> William Taylor-Holubeshen</h1>
        <p>This lab demonstrates the use of Twitter Bootstrap and using local storage to store form variables.</p>
      </div>
    </div>
	<form id="form" action="?flag=1" Method="Post">
	
	<div id="StatusMessage"><?php echo $status; ?></div>
	
	<div class="main panel">
	<div class="panel-heading">
		<h1 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><strong> Personal Interest Form</strong></h1>
	</div>
	<div class="panel-body">
		
		<blockquote>
			<span class="label label-warning">Full Name</span>
			<div class="form-group">
				<input type="text" name="fullname" id="fullname" class="form-control textbox" placeholder="First Name and Last Name" data-toggle="tooltip" title="Please type your first and last name."> 
				<span class="label label-success" style="display:none;" id="FullnameSuccess"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> The full name entered is valid.</span>
				<span class="label label-danger" style="display:none;" id="FullnameFail"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> The fullname entered is invalid.</span>
			</div>
		</blockquote>
		
		<blockquote>
			<span class="label label-warning">Social Insurance</span>
			<div class="form-group">
				<input type="text" name="sin" id="sin" class="form-control textbox" placeholder="123456789" data-toggle="tooltip" title="Please type your social insurance number."> 
				<span class="label label-success" style="display:none;" id="SinSuccess"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> social insurance number is valid.</span>
				<span class="label label-danger" style="display:none;" id="SinFail"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Social Insurance number is invalid</span>
			</div>
		</blockquote>
		
		<blockquote>
			<span class="label label-warning">Date of Birth</span>
			<div class="form-group">
				<input type="text" name="date" id="date" class="form-control textbox" placeholder="Date of Birth (mm/dd/yyyy)" data-toggle="tooltip" title="Please type your date of birth." data-original-title="Please select your birthday using the calender."> 
				<span class="label label-success" style="display:none;" id="DateSuccess"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> The date entered is valid.</span>
				<span class="label label-danger" style="display:none;" id="DateFail"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> The date entered is invalid.</span>
			</div>
		</blockquote>
		
		<blockquote>
			<div class="form-group">
				<span class="label label-warning">Province</span>
				<div class="form-group">
					<select name="province" id="province">
						<option value="">---Select A Province---</option>
						<option value="Nunavut">Nunavut</option>
						<option value="Quebec">Quebec</option>
						<option value="Northwest Territories">Northwest Territories</option>
						<option value="Ontario" >Ontario</option>
						<option value="British Columbia">British Columbia</option>
						<option value="Alberta">Alberta</option>
						<option value="Saskatchewan">Saskatchewan</option>
						<option value="Manitoba">Manitoba</option>
						<option value="Yukon">Yukon</option>
						<option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
						<option value="New Brunswick">New Brunswick</option>
						<option value="Nova Scotia">Nova Scotia</option>
						<option value="Prince Edward Island">Prince Edward Island</option>
					</select>
				</div>
				<span class="label label-success" style="display:none;" id="ProvinceSuccess"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> You have selected a province.</span>
				<span class="label label-danger" style="display:none;" id="ProvinceFail"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Please select a province.</span> 			
			</div>
		</blockquote>
		
		<blockquote>
			<span class="label label-warning">Postal Code</span>
			<div class="form-group">
				<input type="text" name="postal" id="postal" class="form-control textbox" placeholder="L9H 1B6" data-toggle="tooltip" title="Please type your current postal code."> 
				<span class="label label-success" style="display:none;" id="PostalSuccess"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> The postal code is valid.</span>
				<span class="label label-danger" style="display:none;" id="PostalFail"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> The postal code is invalid.</span> 				
			</div>
		</blockquote>
			
		<blockquote>
			<div class="form-group">
				<span class="label label-warning">Gender</span>
				<div class="checkwell">
					<span class="label label-default check">Male<input type="radio" class="checkInput" name="gender" id="Male" value="male"> </span> 
					<span class="label label-default check">Female<input type="radio" class="checkInput" name="gender" id="Female" value="female"> </span> 
				</div>
				<span class="label label-success" style="display:none;" id="GenderSuccess"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Gender has been selected.</span>
					<span class="label label-danger" style="display:none;" id="GenderFail"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Please select a gender.</span>
			</div>
		</blockquote>
		
		<blockquote>
			<span class="label label-warning">Telephone</span>
			<div class="form-group">
				<input type="text" name="phone" id="phone" class="form-control textbox" placeholder="(905)555-1234" data-toggle="tooltip" title="Please type a valid phone number." > 
				<span class="label label-success" style="display:none;" id="PhoneSuccess"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Phone number is valid</span>
				<span class="label label-danger" style="display:none;" id="PhoneFail"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Phone number is not valid</span>
			</div>
		</blockquote>
		
		<blockquote>
			<span class="label label-warning">Email</span>
			<div class="form-group">
				<input type="text" name="email" id="email" class="form-control textbox" placeholder="E-mail example@email.com" data-toggle="tooltip" title="Please type a valid email address."> 
				<span class="label label-success" style="display:none;" id="EmailSuccess"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> The email entered is valid.</span>
				<span class="label label-danger" style="display:none;" id="EmailFail"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> The email entered is invalid.</span>
			</div>
		</blockquote>
	
	</div>
	

	<div class="well" id="footerbtns">
		<div class="center">

		<div class="btn-group btn-group" role="group" aria-label="...">
			<div class="btn-group" role="group">
				<input type="Submit" class="btn btn-default" id="Submit">
			</div>
			<div class="btn-group" role="group">
				<button id="formMemory" class="btn btn-default">Form Memory</button>
			</div>
		</div>
		</div>
	</div>
	
	</form>
		
    </div>
	 

      <footer>
        <p class="center"><strong>Comp10043: Lab5: Forms and Local Storage - William Taylor-Holubeshen</strong></p>
      </footer>
	  
	  
    </div> 
		
		
		<script>
$(document).ready(function(){
	$("#date").datepicker();
		
	jQuery.validator.addMethod("sin", function(value, element) {
		return this.optional(element) || /[0-9]{9}/.test(value);
	}, "The sin number is invalid.");
	
	jQuery.validator.addMethod("postal", function(value, element) {
		return this.optional(element) || /[\w|\d]{3}[ |-]{0,1}[\w|\d]{3}/.test(value);
	}, "The postal code is invalid.");
	
	jQuery.validator.addMethod("phone", function(value, element) {
		return this.optional(element) || /^(\([2-9]|[2-9])(\d{2}|\d{2}\))(-|.|\s)?\d{3}(-|.|\s)?\d{4}$/.test(value);
	}, "The phone number is invalid.");
	
	var validator = $("#form").validate({
		rules:{
			fullname: {
				required: true,
				minlength: 2
			},
			sin: {
				required: true,
				sin: true,
				minlength: 9
			},
			date: {
				required: true,
				date: true,
				minlength: 2
			},
			postal: {
				required: true,
				postal: true,
				minlength: 2
			},
			phone: {
				required: true,
				phone: true,
				minlength: 10
			},
			email: {
				required: true,
				email: true,
				minlength: 2
			}
		},
		errorPlacement: function(error, element) {
		
			switch(element.attr("name")){
				case"fullname":
					$("#FullnameSuccess").css({display:"none"});
					$("#FullnameFail").css({display:"block"});
				break;
				case"sin":
					$("#SinSuccess").css({display:"none"});
					$("#SinFail").css({display:"block"});
				break;
				case"date":
					$("#DateSuccess").css({display:"none"});
					$("#DateFail").css({display:"block"});
				break;
				case"postal":
					$("#PostalSuccess").css({display:"none"});
					$("#PostalFail").css({display:"block"});
				break;
				case"phone":
					$("#PhoneSuccess").css({display:"none"});
					$("#PhoneFail").css({display:"block"});
				break;
				case"email":
					$("#EmailSuccess").css({display:"none"});
					$("#EmailFail").css({display:"block"});
				break;
			}
		},
		success: function(error, element, test) {

			switch($(element).attr("name")){
				case"fullname":
					$("#FullnameFail").css({display:"none"});
					$("#FullnameSuccess").css({display:"block"});
				break;
				case"sin":
					$("#SinFail").css({display:"none"});
					$("#SinSuccess").css({display:"block"});
				break;
				case"date":
					$("#DateFail").css({display:"none"});
					$("#DateSuccess").css({display:"block"});
				break;
				case"postal":
					$("#PostalFail").css({display:"none"});
					$("#PostalSuccess").css({display:"block"});
				break;
				case"phone":
					$("#PhoneFail").css({display:"none"});
					$("#PhoneSuccess").css({display:"block"});
				break;
				case"email":
					$("#EmailFail").css({display:"none"});
					$("#EmailSuccess").css({display:"block"});
				break;
			}
		}
	});
	
$("#form").submit(function(e){
	json = $(this).serializeJSON();
	localStorage.setItem("memory", JSON.stringify(json));
			
	if(!validateElm()){e.preventDefault();}
});

$("#formMemory").click(function(){
	json = JSON.parse(localStorage.getItem("memory"));
	$("#fullname").val(json.fullname);
	$("#sin").val(json.sin);
	$("#date").val(json.date);
	$("#province").val(json.province);
	$("#postal").val(json.postal);
	$("#phone").val(json.phone);
	$("#email").val(json.email);
	console.log(json);
	if(json.male){
		$("#male").prop("checked", true);
	}
	if(json.female){
		$("#female").prop("checked", true);
	}
});

function validateElm(){
	var gender = 0;
	var flag = true;
	
	if($("#Male").prop("checked")){gender++;}
	if($("#Female").prop("checked")){gender++;}
		
	
	if(gender>0){
		$("#GenderFail").css({display:"none"});
		$("#GenderSuccess").css({display:"block"});
	}
	else{
		$("#GenderSuccess").css({display:"none"});
		$("#GenderFail").css({display:"block"});
		flag = false;
	}
	
	if($("#province").val() != ""){
		$("#ProvinceFail").css({display:"none"});
		$("#ProvinceSuccess").css({display:"block"});
	}
	else{
		$("#ProvinceSuccess").css({display:"none"});
		$("#ProvinceFail").css({display:"block"});
		flag = false;
	}
	
	return flag;
}

	
});





		</script>
		
    </body>
</html>
