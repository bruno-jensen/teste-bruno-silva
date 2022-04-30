@extends('theme.default')

@section('content')

<body>

<h3>Contacts List page</h3>

<p></p>

<div class="container">
  <div class="row">
    <div class="col-sm">      
    </div>
    <div class="col-sm">      
    </div>
    <div class="col-sm">      
    </div>
    <div class="col-sm">      
    </div>
    <div class="col-sm" style="text-align: right;">
		<a href="{{ url('contact/create/') }}" title="Add new contact">
			<i class="fas fa-plus"></i>
		</a>			
    </div>
  </div> 

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
  
  @foreach($contactList as $contact)  
	<div class="row">
		<div class="col-sm" style="text-align: center;">
			{{ $contact->ID }}
		</div>
		<div class="col-sm" style="text-align: center;">
			{{ $contact->Name }}
		</div>
		<div class="col-sm" style="text-align: center;">
			{{ $contact->Contact }}
		</div>
		<div class="col-sm" style="text-align: center;">
			{{ $contact->email }}
		</div>
		<div class="col-sm" style="text-align: center;">
			<div class="space"></div>			
			<form action="{{ url('contact/destroy') }}/{{ $contact->ID }}" method="POST">
				@csrf
  				<input type="hidden" name="id" value={{ $contact->ID }} />
  				<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
			</form>
			<div class="space"></div>
			<a href="{{ url('contact/') }}/{{ $contact->ID }}/edit" title="Edit contact">
				<i class="far fa-edit"></i>
			</a>
			<div class="space"></div>						
			<a href="{{ url('contact/details')}}/{{ $contact->ID }}" title="Details">
				<i class="fas fa-search-plus"></i>
			</a>			
		</div>
	</div>

	<form method='POST' id='formgeral' action="{{ url('contact/delete') }}/{{ @$ID }}" enctype="multipart/form-data">
		@csrf
		<input type="hidden" id="ID" name="ID" value="{{ @$ID }}">
	</form>

  @endforeach
  
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