@extends('layouts/app_creditor')

@section('content')
<style>
  .uper {
    margin-top: 10px;
  }
</style>
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
     <div class="col-md-12">
			<ul class="nav nav-tabs">
      <li class="nav-item">
      <a class="nav-link" href="/creditorhome">Summary</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="/creditorprofile">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu1">Documents</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu1">Inquiries</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu1">Credit Checking</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu1">Existing Loan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu1">Messages</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu1">Update</a>
    </li>
   
  </ul>

  <!-- Tab panes 
  <br><button type="submit" class="btn btn-primary" >Edit</button>
          <button type="submit" class="btn btn-primary" >Save</button><br>-->
  <div class="card-header">
    Barrower Info
  </div>
  <div class="tab-content border mb-3">
    <div id="home" class="container tab-pane active"><br>
    
     Customer ID: <br>
     First Name : <br> 
     Middle Name : <br> 
      Last Name : <br> 
      Gender : <br> 
     Nationality : <br> 
      Civil Status : <br>
      Birthdate : <br> 
      Birthplace : <br> 
      Mother's Maiden Name : <br> 
      Present Address (Province): <br> 
      Present Address (City/Municipality): <br> 
      Present Address (Street/Subdivision): <br> 
       <br>
     
<div class="card-header">
    Source of Income
  </div><br>
      
     Source of Fund: <br>
      Employer / Business Name : <br> 
      Employer / Business Address : <br> 
      Industry : <br> 
      Job Title : <br> 
      Lenght Employed / In Operation : <br>
      Monthly Income : <br>
      Annual Income : <br>
      Employer / Business Tel. No: <br>
      Employer / Business Email Address : <br>
      <br>
      <br>  
       
     <div class="card-header">
    Co-Maker Info
  </div><br> 
  Relationship to Barrower: <br>
  First Name : <br> 
     Middle Name : <br> 
      Last Name : <br> 
      Gender : <br> 
     Nationality : <br> 
      Civil Status : <br>
      Birthdate : <br> 
      Birthplace : <br> 
      Mother's Maiden Name : <br> 
      Present Address (Province): <br> 
      Present Address (City/Municipality): <br> 
      Present Address (Street/Subdivision): <br> 
      <br>

        <div class="card-header">
    Character Reference
  </div><br>
  Name of Reference: <br>
  Contact No: <br> 
  Relationship to Barrower: <br><br>
  <div class="card-header">
    Trade Reference
  </div><br>
  Name of Reference: <br>
  Contact No: <br> 
  Company Name : <br>
  Company Address : <br><br>

  <div class="card-header">
    Bank Relationship
  </div><br>
  Bank Name / Branch: <br>
  Account Type : <br> 
  ADB / Latest Balance : <br>
  Accouting Handling Status : <br><br>
  <div class="card-header">
    Credit Relationship / Reference
  </div><br>
  Bank Name / Branch: <br>
  Loan Type : <br> 
  Outstanding Balance : <br>
  Amortization : <br>
  Maturity Date : <br>
  Payment Status : <br><br>
      </div>
      </form>
  </div>
</div>
@endsection
