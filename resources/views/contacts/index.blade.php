@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-10">
	            <div class="panel panel-default" >
	                <div class="panel-heading">
	                	Contatos
	                </div>

	                <div class="panel-body">
						<p>{!! session('status') !!}</p>
						<p>{!! session('error') !!}</p>

						<form method="GET" action="/contacts">
							{{csrf_field()}}
							<div class="col-md-12">
								<div class="col-md-4">
									<label for="name">Name</label>
							        <input id="name" type="text" class="form-control" name="name" />
				    			</div>

				    			<div class="col-md-4">
									<label for="email">E-Mail</label>
							        <input id="email" type="text" class="form-control" name="email" />
				    			</div>

				    			<div class="col-md-3 pull-right">
									<label>&nbsp;</label>
							        <input type="submit" value="Filtrar" class="form-control btn btn-info" />
				    			</div>
			    			</div>
		    			</form>

						<div class="col-md-12">
						<br />
						</div>
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nome</th>
										<th>Telefone</th>
										<th>E-mail</th>
									</tr>
								</thead>
								<tbody>
									@foreach($cContacts as $oContact)
										<tr>
											<td><a href="/contacts/{{$oContact->id}}">{{$oContact->name}}</a></td>
											<td><a href="/contacts/{{$oContact->id}}">{{$oContact->phone}}</a></td>
											<td><a href="/contacts/{{$oContact->id}}">{{$oContact->email}}</a></td>
										</tr>
									@endforeach
								</tbody>
							</table>
							<center>{{$cContacts->links()}}</center>
						</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection