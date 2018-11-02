<!DOCTYPE html>
<html>
<head>
	<title>Bridge</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
   
   <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
	 
	 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/myprofile.css" rel="stylesheet">
</head>
<body>
	
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="images/logo.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Loan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Partners</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">My Accounts</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">News & Blogs</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	
	<section class="row pt-5">
	<div container
	<div class="input-group mb-3">
  <div class="input-group-prepend">
   
  </div>

</div>
<div class="container">

<div class="row">
<div class="col-md-3">
		 <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          MyProfile
        </a>
      </div>
	   <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
         <a class="card-link" src="sign-check-icon.png" data-toggle="collapse" href="file:///C:/wamp64/www/bridge/myprofile.html"><i class="fas fa-check-circle mr-2"></i> Barrower Information</a><br>
		<a class="card-link" src="sign-check-icon.png" data-toggle="collapse" href="http://localhost/bridges/view/mysourceoffund.html"><i class="fas fa-check-circle mr-2"></i>Source of Income</a><br>
		<a class="card-link" src="sign-check-icon.png" data-toggle="collapse" href="#collapseOne"><i class="fas fa-check-circle mr-2"></i>Attachements</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Loan Status
		
		<i class="fas fa-plus" ></i>
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
  </div>
		</div>
		
		<div class="col-md-8">
			<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#home">As Individual</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu1">As Entity</a>
    </li>
   
  </ul>

  <!-- Tab panes -->
  <div class="tab-content border mb-3">
    <div id="home" class="container tab-pane active"><br>
      <h3>Barrower's Information</h3>
      Details Inputed here will directly encoded to Bank's Loan Application Form  
   
   
   
<div class="col-md-9 offset-md-1">
	<div class="input-field">
		<input  id="first_name" type="text" class="validate">
		<label for="first_name">First Name</label>
	</div>
	<div class="input-field">
	  <input id="middle_name" type="text" class="validate">
	  <label for="middle_name">Middle Name</label>
	</div>
			
	<div class="input-field">
	  <input id="last_name" type="text" class="validate">
	  <label for="last_name">Last Name</label>
	</div>

	<div class="input-field">
		<select>
			<option value="" disabled selected>Choose your option</option>
			<option value="1">Male</option>
			<option value="2">Female</option>
		</select>
	</div>
		
		
		 
  <select class="browser-default">
    <option value="" disabled selected>Select your Gender</option>
    <option value="1">Male</option>
			<option value="2">Female</option>
  </select></br>
  
  <select class="browser-default">
    <option value="" disabled selected>Select your Civil Status</option>
		<option value="1">Single</option>
		<option value="2">Married</option>
		<option value="1">Widowed</option>
		<option value="2">Separated</option>
  </select>
	

	<!--
	<div id="home" class="input-field">
	<select >
		<option selected>Civil Status..</option>
		<option value="1">Single</option>
		<option value="2">Married</option>
		<option value="1">Widowed</option>
		<option value="2">Separated</option>
		
	  </select>
	</div> -->
	
	

	<div id="Nationality" class="container tab-pane active"><br>
		<input type="text" class="form-control" placeholder="Nationality" aria-label="Nationality" aria-describedby="basic-addon2">
	<div class="input-group-append">
	 </div>
	</div>

	<div id="BirthDate" class="container tab-pane active"><br>
	<input id="datepicker"type="text" class="form-control" placeholder="Birth Date" aria-label="Birth Date" aria-describedby="basic-addon2">
	<div class="input-group-addon">
		<span class="glyphicon glyphicon-th"></span>
	</div>
	</div>


	<div id="BirthPlace" class="container tab-pane active"><br>
	  <input type="text" class="form-control" placeholder="Birth Place" aria-label="Birth Place" aria-describedby="basic-addon2">
	  <div class="input-group-append">
	 </div>
	</div>

	<div id="BirthPlace" class="container tab-pane active"><br>
	  <input type="text" class="form-control" placeholder="Mother's Name(Optional)" aria-label="Mother's Name" aria-describedby="basic-addon2">
	  <div class="input-group-append">
	 </div>
	</div>
		
		<div id="PresentAddressProvince" class="container tab-pane active"><br>
	  <input type="text" class="form-control" placeholder="Present Address : Province" aria-label="Present Address:Province" aria-describedby="basic-addon2">
	  <div class="input-group-append">
	 </div>
	</div>

		<div id="PresentAddressCity" class="container tab-pane active"><br>
	  <input type="text" class="form-control" placeholder="Present Address : City/Munincipal" aria-label="Present Address:City/Munincipal" aria-describedby="basic-addon2">
	  <div class="input-group-append">
	 </div>
	</div>


		<div id="PresentAddressStreet" class="container tab-pane active"><br>
	  <input type="text" class="form-control" placeholder="Present Address : Street/Subdivision" aria-label="Present Address:Street/Subdivision" aria-describedby="basic-addon2">
	  <div class="input-group-append">
	 </div>
	</div>

	<div id="LenghtofStay" class="container tab-pane active"><br>
	  <input type="text" class="form-control" placeholder=" Lenght of Stay" aria-label="Lenght of Stay" aria-describedby="basic-addon2">
	  <div class="input-group-append">
	 </div>
	</div>

	<div id="ResidenceOwnership" class="container tab-pane active"><br>
	  <input type="text" class="form-control" placeholder="Residence Ownership" aria-label="Residence Ownership" aria-describedby="basic-addon2">
	  <div class="input-group-append">
	 </div>
	</div>

	<div id="Permanent Address" class="container tab-pane active"><br>
	  <input type="text" class="form-control" placeholder="Permanent Address" aria-label="Permanent Address" aria-describedby="basic-addon2">
	  <div class="input-group-append">
	 </div>
	</div>
	
	 </br>
	   <button class="btn btn-outline-secondary">ADD SPOUSE INFO(IF ANY)&nbsp<i class="fas fa-plus" style="border-left:1px solid black; padding-left:5px;"></i></button>
	  <br></br>
	  
	  </br>
	   <button class="btn btn-outline-secondary">ADD CO-MAKER(IF ANY)&nbsp<i class="fas fa-plus" style="border-left:1px solid black; padding-left:5px;"></i></button>
	  <br></br>

	  <!--
	<br>
	<div class="custom-file">
	  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
	  <label class="custom-file-label" for="customFileLang">ADD SPOUSE INFO(IF ANY)</label>
	</div>

	<br></br>
	<div class="custom-file">
	  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
	  <label class="custom-file-label" for="customFileLang">ADD CO-MAKER(IF ANY)</label>
	</div>

	  </br>
	   <button class="btn btn-outline-secondary">ADD SPOUSE INFO(IF ANY)&nbsp<i class="fas fa-plus" style="border-left:1px solid black; padding-left:5px;"></i></button>
	  <br></br>
	 
	   <button class="btn btn-outline-secondary">ADD CO-MAKER(IF ANY)&nbsp<i class="fas fa-plus" style="border-left:1px solid black; padding-left:5px;"></i></button>
	  <br></br>
	  </div>
  </div>> -->
    
<!--	
 <div id="home" class="container tab-pane active"><br>
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="COMPANY ID(FRONT & BACK)" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">+</button>
  </div>
</div> 

<div class="container tab-pane active">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02">
    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="">Upload</span>
  </div>
</div>
	<p class="act"><b>Active Tab</b>: <span></span></p>
  <p class="prev"><b>Previous Tab</b>: <span></span></p>
  <br></br>
   <button class="btn btn-outline-secondary">ADD SPOUSE INFO(IF ANY)&nbsp<i class="fas fa-plus" style="border-left:1px solid black; padding-left:5px;"></i></button>
  <br></br>
  </div>-->
  
	
   
   </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>As Entity</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
	</div>
		
	</section>


	
</div>
</div>
		
	  <script>
	  
  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
	   </script>
     <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
			format: 'mm/dd/yyyy',
    startDate: '-3d'
        });
    </script>

<script>
$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    $('.nav-tabs a').on('shown.bs.tab', function(event){
        var x = $(event.target).text();         // active tab
        var y = $(event.relatedTarget).text();  // previous tab
        $(".act span").text(x);
        $(".prev span").text(y);
    });
});
</script>
	

	<footer class="container-fluid">
		<div class="container">
			<div class="row py-5">
				<div class="col-md-3">
					<ul>
						<li>ABOUT US</li>
						<li>Home</li>
						<li>Who we are</li>
						<li>Product & Services</li>
						<li>Our Credit Partners</li>
						<li>Contact Us</li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li>NEED HELP?</li>
						<li>FAQs</li>
						<li>Terms</li>
						<li>Privacy Policy</li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li>NEWS</li>
						<li>Financial Blogs</li>
						<li>News and Updates</li>
						<li>Process Flow</li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li>TOOLS</li>
						<li>Account Setting</li>
						<li>Loan Calculator</li>
					</ul>
				</div>
			</div>
			<div class="text-center col-md-12 pb-3">
				<p>Copyright @ 2018</p>
			</div>
		</div>
	</footer>
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
	
	</body>
</html>