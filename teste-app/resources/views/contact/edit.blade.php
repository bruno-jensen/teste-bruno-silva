@extends('theme.default')

@section('content')

<body>
<h3>Edit contact page</h3>

<p></p>

<div class="container">
  

  <div class="row">
    <div class="col-sm" style="text-align: center;">
      <h4>Id</h4>
    </div>
    <div class="col-sm" style="text-align: center;">
      <h4>Name</h4>
    </div>
    <div class="col-sm" style="text-align: center;">
      <h4>Contact</h4>
    </div>
    <div class="col-sm" style="text-align: center;">
      <h4>E-mail</h4>
    </div>
    <div class="col-sm" style="text-align: center;">
      <h4>Action</h4>
    </div>
  </div>
  
	<form method='POST' id='formgeral' action="{{ url('contact/update') }}/{{ @$ID }}" enctype="multipart/form-data">
		@csrf
  		<div class="row">
    		<div class="col-sm" style="text-align: center;">
      		{{ @$ID }}
      		<input type="hidden" id="ID" name="ID" value="{{ @$ID }}">  
    	</div>
    	<div class="col-sm" style="text-align: center;">
    		<input type="text" minlength="5" id="Name" name="Name" value="{{ @$Name }}">      		
    	</div>
    	<div class="col-sm" style="text-align: center;">
    		<input type="text" minlength="9" maxlength="9" id="Contact" name="Contact" value="{{ @$Contact }}">      		
    	</div>
    	<div class="col-sm" style="text-align: center;">
    		<input type="text" id="email" name="email" value="{{ @$email }}">
    	</div>
    	<div class="col-sm" style="text-align: center;">
			<a href="{{ url('contact/') }}" title="Voltar">
				<i class="fas fa-arrow-circle-left"></i>
			</a>
				<button type="submit" class="btn btn-primary">
    				<i class="fas fa-save"></i>
				</button>			
    	</div>
    </form>  
</div>
</body>

<style>

.space {
    width: 4px;
    height: auto;
    display: inline-block;

}

</style>

@endsection