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
		<a class="card-link" src="sign-check-icon.png" data-toggle="collapse"  ><a class="fas fa-check-circle mr-2" href="/barrowerattachments"></a>Attachments</a><br>
        <br>
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
      <h3>Attachments</h3>
      Details Inputed here will directly encoded to Bank's Loan Application Form  
   
   
   
<div class="col-md-9 offset-md-1">
	
	<div class="custom-file">
	  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
	  <label class="custom-file-label" for="customFileLang">Two Goverment Issued ID: </label>
	</div>

	<br></br>
	<div class="custom-file">
	  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
	  <label class="custom-file-label" for="customFileLang">Company Front and back ID</label>
	</div>
    <br></br>
    <div class="custom-file">
	  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
	  <label class="custom-file-label" for="customFileLang">Proof of Billing</label>
	</div>
    <br></br>
    <div class="custom-file">
	  <input type="file" class="custom-file-input" id="payslp" lang="es">
	  <label class="custom-file-label" for="payslp">Three(3) Months Payslips</label>
	</div>
    <br></br>
    <div class="custom-file">
	  <input type="file" class="custom-file-input" id="coe" lang="es">
	  <label class="custom-file-label" for="coe">Certificate of Employement(COE)</label>
	</div>
    <br></br>
    <div class="custom-file">
	  <input type="file" class="custom-file-input" id="itr" lang="es">
	  <label class="custom-file-label" for="itr">Latest Income Tax Return (ITR)</label>
	</div>
    <br></br>
<div class="custom-file">
	  <input type="file" class="custom-file-input" id="others" lang="es">
	  <label class="custom-file-label" for="others">Others</label>
	</div>

<!---
	  </br>
	   <button class="btn btn-outline-secondary">ADD SPOUSE INFO(IF ANY)&nbsp<i class="fas fa-plus" style="border-left:1px solid black; padding-left:5px;"></i></button>
	  <br></br>-->
	 
	 
  
	
   
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

 





