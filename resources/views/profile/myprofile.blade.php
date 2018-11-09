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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
		<a class="card-link" src="sign-check-icon.png" data-toggle="collapse"  ><a class="fas fa-check-circle mr-2" href="/barrowerattachments"></a>Attachements</a><br>
  
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
      <h2>Barrower's Information</h2>
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
		<input  id="last_name" type="text" class="validate">
		<label for="last_name">Last Name</label>
	</div>
  <div class="input-field">
		<input  id="nationality" type="text" class="validate">
		<label for="nationality">Nationality</label>
	</div>
 
  <div class="dropdown2">
                <div class="col-md-12">
                <div class="col-md-12">Civil Status:</div>
                    <select id="policycount" class="form-control input-sm">
                    <option class="disabled" value="0"></option>
                        <option value="1">Single</option>
                        <option value="2">Maried</option>
                        <option value="2">Widdow</option>
                        <option value="2">Separated</option>
                        <option value="2">Annuled</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-12">Gender :</div>
                    <select id="policycount" class="form-control input-sm">
                    <option class="disabled" value="0"></option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        
                    </select>
                </div>
                
            
<br>
            <div class="col-md-12">
            <label for="birthdate">Bith Date</label>
            <input class="datepicker" data-date-format="mm/dd/yyyy">
            
            <script>
            $('.datepicker').datepicker({
                  startDate: '-3d'
              }); </script>
               </div>
               <div class="input-field">
		<input  id="birthplace" type="text" class="validate">
		<label for="birthplace">Birth Place</label>
	</div>

   <div class="input-field">
		<input  id="birthplace" type="text" class="validate">
		<label for="birthplace">Mother's Maiden Name</label>
	</div>

  <div class="input-field">
		<input  id="birthplace" type="text" class="validate">
		<label for="birthplace">Present Address (province):</label>
	</div>

  <div class="input-field">
		<input  id="birthplace" type="text" class="validate">
		<label for="birthplace">Present Address (City/Munincipality):</label>
	</div>

  <div class="input-field">
		<input  id="birthplace" type="text" class="validate">
		<label for="birthplace">Present Address (Street/Subdivision) :</label>
	</div>

  <div class="input-field">
		<input  id="birthplace" type="text" class="validate">
		<label for="birthplace">Lenght of Stay</label>
	</div>

<div class="input-field">
		<input  id="birthplace" type="text" class="validate">
		<label for="birthplace">Residence Ownership</label>
	</div>

  <div class="input-field">
		<input  id="birthplace" type="text" class="validate">
		<label for="birthplace">Permanent Address</label>
	</div>

<!---
<br>
	<div class="custom-file">
	  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
	  <label class="custom-file-label" for="customFileLang">ADD SPOUSE INFO(IF ANY)</label>
	</div>

	<br></br>
	<div class="custom-file">
	  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
	  <label class="custom-file-label" for="customFileLang">ADD CO-MAKER(IF ANY)</label>
	</div>-->

  </br>
	   <button class="btn btn-outline-secondary">ADD SPOUSE INFO(IF ANY)&nbsp<i class="fas fa-plus" style="border-left:1px solid black; padding-left:5px;"></i></button>
	  <br></br>

    </br>
	   <button class="btn btn-outline-secondary">ADD CO-MAKER(IF ANY)&nbsp<i class="fas fa-plus" style="border-left:1px solid black; padding-left:5px;"></i></button>
	  <br></br>


               </div>
	         </div>
 
  

   

    		<div id="menu1" class="container tab-pane fade"><br>
     			 <h3>As Entity</h3>
     			 <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    		</div>
				</div>
		
				</section>
      </form>
  </div>
</div>
@endsection

 
 <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
