@extends('layouts/app_barrower')

@section('content')
<style>
  .uper {
    margin-top: 10px;
  }
</style>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Custom styles for this template -->
<link href="css/myprofile.css" rel="stylesheet">
<div class="card uper">
  
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="">
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
        <a class="card-link" src="sign-check-icon.png" data-toggle="collapse" ><a class="fas fa-check-circle mr-2"  href="/barrowerinfo"></a> Barrower Information</a><br>
		<a class="card-link" src="sign-check-icon.png" data-toggle="collapse"  ><a class="fas fa-check-circle mr-2" href="/barrowersource"></a>Source of Income</a><br>
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
      <h3>Source of Income</h3>
      Details Inputed here will directly encoded to Bank's Loan Application Form  
   
   
   
<div class="col-md-9 offset-md-1">
	<div class="input-field">
		<input  id="source_income" type="text" class="validate">
		<label for="source_income">Source of Income</label>
	</div>
	<div class="input-field">
	  <input id="employer_name" type="text" class="validate">
	  <label for="employer_name">Employer / Business Name</label>
	</div>
			
	<div class="input-field">
	  <input id="last_name" type="text" class="validate">
	  <label for="last_name">Employer / Business Address</label>
	</div>
	
			
	<div class="input-field">
	  <input id="last_name" type="text" class="validate">
	  <label for="last_name">Industry</label>
	</div>
	
	<div class="input-field">
	  <input id="last_name" type="text" class="validate">
	  <label for="last_name">My Job Title</label>
	</div>
	
	<div class="input-field">
	  <input id="last_name" type="text" class="validate">
	  <label for="last_name">Lenght Employed / In Operation</label>
	</div> 
	
	<div class="input-field">
	  <input id="last_name" type="text" class="validate">
	  <label for="last_name">Monthly Income</label>
	</div>
	
	<div class="input-field">
	  <input id="last_name" type="text" class="validate">
	  <label for="last_name">Annual Income</label>
	</div>
	
	<div class="input-field">
	  <input id="last_name" type="text" class="validate">
	  <label for="last_name">Employer / Business Tel No.</label>
	</div>
	
	<div class="input-field">
	  <input id="last_name" type="text" class="validate">
	  <label for="last_name">Employer / Business Email Address</label>
	</div>

	
	<!--<br>
	<div class="custom-file">
	  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
	  <label class="custom-file-label" for="customFileLang">ADD Source of Income</label>
	</div>

	<br></br>
	<div class="custom-file">
	  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
	  <label class="custom-file-label" for="customFileLang">ADD CO-MAKER(IF ANY)</label>
	</div>-->

	  </br>
	   <button class="btn btn-outline-secondary">ADD SPOUSE INFO(IF ANY)&nbsp<i class="fas fa-plus" style="border-left:1px solid black; padding-left:5px;"></i></button>
	  <br></br>
	 
	 
  
	
   
   </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>As Entity</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
	</div>
		



	
</div>
</div>
				</section>
      </form>
  </div>
</div>
@endsection

 





