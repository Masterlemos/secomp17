@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-10">
	            <div class="panel panel-default">
	                <div class="panel-heading">Mostrar Contato</div>
	                <div class="panel-body">
						<form id="create-form" class="form-horizontal" role="form" method="POST" action="/contacts">
							<div class="form-group">
								<label for="name" class="col-md-4 control-label">Name</label>

								<div class="col-md-6">
							        <input id="name" type="text" class="form-control" name="name" value="{{ $contact->name }}" readonly />
				    			</div>
							</div>
							
							<div class="form-group">
								<label for="email" class="col-md-4 control-label">E-Mail</label>

								<div class="col-md-6">
							        <input id="email" type="email" class="form-control" name="email" value="{{ $contact->email }}" readonly />
				    			</div>
							</div>

							<div class="form-group">
								<label for="phone" class="col-md-4 control-label">Phone</label>

								<div class="col-md-6">
							        <input id="phone" type="text" class="form-control" name="phone" value="{{ $contact->phone }}" readonly />
				    			</div>
							</div>

						 	<div class="form-group">
				                <div class="col-md-6 col-md-offset-4">
				                    <a href="/contacts/{{$contact->id}}/edit" class="btn btn-success">Editar Contato</a>
				                </div>
				            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection