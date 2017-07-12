@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-10">
	            <div class="panel panel-default">
	                <div class="panel-heading">Mostrar Contato</div>
	                <div class="panel-body">
	                	<div class="form-group">
				            <div class="col-md-6 col-md-offset-4">
				                <p><strong>{{session('status')}}</strong></p>
				            </div>
				        </div>
						<form id="create-form" class="form-horizontal" role="form" method="POST" action="/contacts/{{$contact->id}}">
							{{csrf_field()}}
							{{method_field('PATCH')}}
							<input type="hidden" value="{{$contact->id}}" name="id" />
							<div class="form-group">
								<label for="name" class="col-md-4 control-label">Name</label>

								<div class="col-md-6">
							        <input id="name" type="text" class="form-control" name="name" value="{{ $contact->name }}" required />
				    			</div>
							</div>
							
							<div class="form-group">
								<label for="email" class="col-md-4 control-label">E-Mail</label>

								<div class="col-md-6">
							        <input id="email" type="email" class="form-control" name="email" value="{{ $contact->email }}" required />
							        @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
                                	@endif
				    			</div>
							</div>

							<div class="form-group">
								<label for="phone" class="col-md-4 control-label">Phone</label>

								<div class="col-md-6">
							        <input id="phone" type="text" class="form-control" name="phone" value="{{ $contact->phone }}" required />
				    			</div>
							</div>

						 	<div class="form-group">
				                <div class="col-md-6 col-md-offset-4">
				                    <input type="submit" value="Editar Contato" class="btn btn-success" />
				                </div>
				            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection