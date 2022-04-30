@extends('theme.default')

@section('content')

<body>

<h3>Show contact page</h3>

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
  
  <div class="row">
    <div class="col-sm" style="text-align: center;">
      {{ @$ID }}
    </div>
    <div class="col-sm" style="text-align: center;">
      {{ @$Name }}
    </div>
    <div class="col-sm" style="text-align: center;">
      {{ @$Contact }}
    </div>
    <div class="col-sm" style="text-align: center;">
      {{ @$email }}
    </div>
    <div class="col-sm" style="text-align: center;">
    	<form action="{{ url('contact/destroy') }}/{{ @$ID }}" method="POST">
			@csrf
  			<input type="hidden" name="id" value={{ @$ID }} />
  			<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
		</form>
		<div class="space"></div>	
		<a href="{{ url('contact/') }}" title="Back">
			<i class="fas fa-arrow-circle-left"></i>
		</a>		
		<div class="space"></div>
		<a href="{{ url('contact/') }}/{{ @$ID }}/edit" title="Edit contact">
			<i class="far fa-edit"></i>
		</a>
    </div>
  </div>
  
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